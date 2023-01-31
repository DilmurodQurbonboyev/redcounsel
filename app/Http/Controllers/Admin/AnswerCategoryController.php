<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ListType;
use App\Http\Controllers\Controller;
use App\Http\Requests\ListCategoryRequest;
use App\Interfaces\ListCategoryRepositoryInterface;
use App\Models\ListCategory;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class AnswerCategoryController extends Controller
{
    private $listCategoryRepository;

    function __construct(ListCategoryRepositoryInterface $listCategoryRepository)
    {
        $this->listCategoryRepository = $listCategoryRepository;
    }

    public function index()
    {
        return view('admin.answers.answers-category.index');
    }

    public function create()
    {
        $answersCategory = new ListCategory();
        $answersCategories = ListCategory::query()
            ->where('list_type_id', ListType::ANSWER)
            ->where('status', 2)
            ->get();
        return view('admin.answers.answers-category.create', compact('answersCategories', 'answersCategory'));
    }

    public function store(ListCategoryRequest $request, ListCategory $listCategory)
    {
        try {
            $this->listCategoryRepository
                ->saveCategory($request, $listCategory);
            return redirect()
                ->route('answers-category.index')
                ->with('success_save', tr('Successfully saved'));
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }

    public function show($id)
    {
        $answersCategory = $this->listCategoryRepository
            ->getById($id);
        return view('admin.answers.answers-category.show', compact('answersCategory'));
    }

    public function edit($id)
    {
        $answersCategory = $this->listCategoryRepository
            ->getById($id);
        $answersCategories = ListCategory::query()
            ->where('list_type_id', ListType::ANSWER)
            ->where('status', 2)
            ->get();
        return view('admin.answers.answers-category.edit', compact('answersCategory', 'answersCategories'));
    }

    public function update(ListCategoryRequest $request, $id)
    {
        try {
            $this->listCategoryRepository
                ->updateCategory($request, $id);
            return redirect()
                ->route('answers-category.show', $id)
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
            $this->listCategoryRepository
                ->deleteCategory($id);
            return redirect()
                ->route('answers-category.index', $id);
        } catch (Exception $error) {
            return redirect()
                ->route('answers-category.index', $id)
                ->with('success', trans('admin.error_save'));
        }
    }

    public function trashes()
    {
        $users = User::all();
        $answers = ListCategory::onlyTrashed()
            ->where('list_type_id', ListType::ANSWER)
            ->paginate(10);
        return view('admin.answers.answers-category.trashes', compact('answers', 'users'));
    }

    public function restore($id)
    {
        ListCategory::withTrashed()
            ->findOrFail($id)
            ->restore();
        return redirect()
            ->route('answers-category.trashes');
    }

    public function forceDelete($id)
    {
        ListCategory::onlyTrashed()
            ->findOrFail($id)
            ->forceDelete();
        return redirect()
            ->back();
    }
}
