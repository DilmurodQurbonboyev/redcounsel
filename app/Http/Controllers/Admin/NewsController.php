<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Lists;
use App\Helpers\ListType;
use App\Models\ListCategory;
use App\Http\Requests\ListsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Interfaces\ListsRepositoryInterface;


class NewsController extends Controller
{
    private $listsRepository;

    public function __construct(ListsRepositoryInterface $listsRepository)
    {
        $this->listsRepository = $listsRepository;
    }

    public function index()
    {
        return view('admin.news.news.index');
    }

    public function create()
    {
        $news = new Lists();
        $newsCategories = ListCategory::query()
            ->where('list_type_id', ListType::NEWS)
            ->get();
        return view('admin.news.news.create', compact('newsCategories', 'news'));
    }

    public function store(ListsRequest $request, Lists $lists): RedirectResponse
    {
        try {
            $this->listsRepository
                ->saveList($request, $lists);
            return redirect()
                ->route('news.index')
                ->with('success_save', tr('Successfully saved'));
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }

    public function show($id)
    {
        $news = $this->listsRepository->getById($id);
        return view('admin.news.news.show', compact('news'));
    }

    public function edit($id)
    {
        $news = $this->listsRepository->getById($id);
        $newsCategories = ListCategory::query()
            ->where('list_type_id', ListType::NEWS)
            ->get();
        return view('admin.news.news.edit', compact('news', 'newsCategories'));
    }

    public function update(ListsRequest $request, $id): RedirectResponse
    {
        try {
            $this->listsRepository
                ->updateList($request, $id);
            return redirect()
                ->route('news.show', $id)
                ->with('success_update', tr('Successfully updated'));
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }

    public function destroy($id): RedirectResponse
    {
        try {
            $this->listsRepository
                ->deleteList($id);
            return redirect()
                ->route('news.index');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }
}
