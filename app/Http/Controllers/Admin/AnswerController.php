<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ListType;
use App\Http\Controllers\Controller;
use App\Http\Requests\ListsRequest;
use App\Interfaces\ListsRepositoryInterface;
use App\Models\ListCategory;
use App\Models\Lists;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class AnswerController extends Controller
{
    private $listsRepository;

    function __construct(ListsRepositoryInterface $listsRepository)
    {
        $this->listsRepository = $listsRepository;
    }

    public function index()
    {
        return view('admin.answers.answers.index');
    }

    public function create()
    {
        $answers = new Lists();
        $answersCategories = ListCategory::query()
            ->where('list_type_id', ListType::ANSWER)
            ->get();
        return view('admin.answers.answers.create', compact('answersCategories', 'answers'));
    }

    public function store(ListsRequest $request, Lists $lists)
    {
        try {
            $this->listsRepository
                ->saveList($request, $lists);
            return redirect()
                ->route('answers.index')
                ->with('success_save', tr('Successfully saved'));
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }

    public function show($id)
    {
        $answers = $this->listsRepository
            ->getById($id);
        return view('admin.answers.answers.show', compact('answers'));
    }

    public function edit($id)
    {
        $answers = $this->listsRepository
            ->getById($id);
        $answersCategories = ListCategory::query()
            ->where('list_type_id', ListType::ANSWER)
            ->get();
        return view('admin.answers.answers.edit', compact('answers', 'answersCategories'));
    }

    public function update(ListsRequest $request, $id)
    {
        try {
            $this->listsRepository
                ->updateList($request, $id);
            return redirect()
                ->route('answers.show', $id)
                ->with('success_update', tr('Successfully updated'));
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }

    public function destroy($id)
    {
        try {
            $this->listsRepository
                ->deleteList($id);
            return redirect()
                ->route('answers.index');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }
}
