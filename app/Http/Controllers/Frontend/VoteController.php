<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function vote(Request $request): RedirectResponse
    {
        if (empty($request['mark'])) {
            return redirect()->back()->with('info', tr('You just need to choose at least one vote'));
        } elseif (count($request['mark']) > 1) {
            return redirect()->back()->with('info', tr('You just need to choose one vote'));
        } else {
            Vote::query()->create([
                'mark' => $request['mark'][0],
                'user_ip' => $request->ip(),
                'browser_agent' => $request->header('User-Agent'),
            ]);
            return redirect()->back()->with('success', tr('Thank you for your voting'));
        }
    }
}
