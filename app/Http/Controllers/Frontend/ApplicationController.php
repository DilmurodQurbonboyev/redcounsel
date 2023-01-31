<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Lists;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppealRequest;
use App\Models\Appeal;
use App\Services\TaskService;
use Exception;

class ApplicationController extends Controller
{

    public function appeal()
    {
        $appeal = new Appeal();
        return view('frontend.appeal', compact('appeal'));
    }

    public function appealPost(AppealRequest $request): RedirectResponse
    {
        $generate = implode("-", str_split(strtoupper(substr(sha1(microtime()), rand(0, 5), 10)), 5));
        try {
            $appeal = new Appeal();
            $appeal->fullname = $request->fullname;
            $appeal->organization = $request->organization;
            $appeal->phone = $request->phone;
            $appeal->email = $request->email;
            $appeal->appeal_type = $request->appeal_type;
            $appeal->address = $request->address;
            $appeal->region_id = $request->region_id;
            $appeal->code = $generate;
            $appeal->file = TaskService::fileUpload($request, 'file', $generate, 'file') ?? '';
            $appeal->message = $request->message;
            $appeal->answer = $request->answer;
            $appeal->user_ip = $request->ip();
            $appeal->browser_agent = $request->header('User-Agent');
            $appeal->save();

            $message = "Your application has been accepted, you can check the status of your application using the following code: {code}";
            return redirect()
                ->back()
                ->with('success', tr($message, ['code' => $appeal->code]));
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }

    public function appealStats()
    {
        $lists = Lists::getList()
            ->where('lists.list_type_id', 5)
            ->where('lists.lists_category_id', 46)
            ->where('lists.status', 2)
            ->orderBy('lists.date', 'desc')
            ->orderBy('lists.order')
            ->paginate(12);

        $query = Appeal::query();
        $totalAppeals = $query->count();
        $successAppeals = $query->where('status', 1)->count();
        $processAppeals = $query->where('status', 0)->count();
        $rejectAppeals = $query->where('status', 2)->count();
        return view('frontend.statistic', compact([
            'totalAppeals',
            'successAppeals',
            'processAppeals',
            'rejectAppeals',
            'lists'
        ]));
    }

    public function status()
    {
        return view('frontend.appeal-status');
    }

    public function statusPost(Request $request)
    {
        $result = Appeal::query()
            ->where('code', $request->code)
            ->first();
        if ($result) {
            if ($result->status == 0) {
                return redirect()->back()->with('not_checked_status', tr('Your application has not yet been processed'));
            } elseif ($result->status == 1) {
                return redirect()->back()->with('success_status', tr('Your application has been successfully processed'));
            } elseif ($result->status == -1) {
                return redirect()->back()->with('reject_status', tr('Your application has been rejected'));
            }
        } else {
            return redirect()->back()->with('not_found_status', tr('There is no such application'));
        }
    }

}
