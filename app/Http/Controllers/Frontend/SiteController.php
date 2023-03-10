<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Lists;
use App\Models\Region;
use App\Models\Contact;
use App\Helpers\ListType;
use App\Models\MCategory;
use App\Models\Management;
use Illuminate\Http\Request;
use App\Models\ListCategory;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function categoryList()
    {
        $category = ListCategory::query()
            ->where('list_type_id', 1)
            ->where('id', 1)
            ->where('status', 2)
            ->first();
        $categories = ListCategory::query()
            ->where('list_type_id', 1)
            ->where('parent_id', '!=', null)
            ->where('status', 2)
            ->with('lists')
            ->get();

        $news = Lists::getList()
            ->where('lists.list_type_id', 1)
            ->where('lists.lists_category_id', '!=', 1)
            ->where('lists.status', 2)
            ->orderBy('lists.date', 'desc')
            ->orderBy('lists.order')
            ->paginate(12);
        return view('frontend.news-list', compact('news', 'category', 'categories'));
    }

    public function leader($slug)
    {
        $category = MCategory::query()
            ->where('slug', $slug)
            ->where('status', 2)
            ->first();

        $leaders = Management::query()
            ->where('m_category_id', $category->id)
            ->orderBy('order')
            ->where('status', 2)
            ->paginate(12);

        $experience = Lists::getList()->findOrFail(16);
        $unique = Lists::getList()->findOrFail(17);
        $teamPractise = ListCategory::query()->findOrFail(12);

        return view('frontend.management', compact([
            'leaders',
            'category',
            'experience',
            'unique',
            'teamPractise'
        ]));
    }

    public function category($slug)
    {
        $category = ListCategory::query()
            ->where('slug', $slug)
            ->where('status', 2)
            ->with(
                [
                    'translations' => function ($query) {
                        $query->where('locale', app()->getLocale());
                    }
                ]
            )
            ->first();

        if (is_null($category)) {
            return view('frontend.404');
        }

        switch ($category->list_type_id) {
            case ListType::NEWS:
                $view = 'frontend.news';
                break;
            case ListType::PAGE:
                $view = 'frontend.international';
                break;
            case ListType::PHOTO:
                $view = 'frontend.photoGallery';
                break;
            case ListType::VIDEO:
                $view = 'frontend.videogallery';
                break;
            case ListType::USEFUL:
                $view = 'frontend.link';
                break;
            default:
                break;
        }

        $lists = Lists::getList()
            ->where('lists.list_type_id', $category->list_type_id)
            ->where('lists.lists_category_id', $category->id)
            ->where('lists.status', 2)
            ->orderBy('lists.date', 'desc')
            ->orderBy('lists.order')
            ->paginate(12);

        return view($view, compact('lists', 'category'));
    }

    public function news($slug)
    {
        $list = Lists::getList()->where('lists.slug', $slug)->first();
        if (is_null($list)) {
            abort(404);
        }
        $listKey = 'news_' . $list->id;
        if (!session()->has($listKey)) {
            $list->count_view++;
            $list->saveQuietly();
            session()->put($listKey, 1);
        }
        return view("frontend.detail", compact('list'));
    }

    public function pages($slug)
    {
        $list = Lists::getList()->where('lists.slug', $slug)->first();
        if (is_null($list)) {
            return view('frontend.errors.404');
        }

        $listKey = 'pages_' . $list->id;
        if (!session()->has($listKey)) {
            $list->count_view++;
            $list->saveQuietly();
            session()->put($listKey, 1);
        }

        return view("frontend.detail", compact('list'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $search = xss_clean($search);

        $lists = Lists::whereTranslationLike('title', "%$search%")
            ->orWhereTranslationLike('description', "%$search%")
            ->orWhereTranslationLike('content', "%$search%")
            ->whereIn('list_type_id', [ListType::NEWS, ListType::PAGE])
            ->paginate(12);

        return view("frontend.search", compact('lists'));
    }

    public function contact()
    {
        $contact = Contact::withTranslation()->first();
        return view('frontend.contact', compact('contact'));
    }

    public function about()
    {
        $list = Lists::getList()
            ->where('lists.list_type_id', 5)
            ->where('lists.lists_category_id', 6)
            ->where('lists.status', 2)
            ->orderBy('lists.date', 'desc')
            ->orderBy('lists.order')
            ->first();
        $services = Lists::getList()
            ->where('lists.list_type_id', 5)
            ->where('lists.lists_category_id', 7)
            ->where('lists.status', 2)
            ->orderBy('lists.date', 'desc')
            ->orderBy('lists.order')
            ->get();
        return view('frontend.about', compact('list', 'services'));
    }

    public function expertise()
    {
        $expertises = Lists::getList()
            ->where('lists.list_type_id', 5)
            ->where('lists.lists_category_id', 8)
            ->where('lists.status', 2)
            ->orderBy('lists.date', 'desc')
            ->orderBy('lists.order')
            ->get();
        return view('frontend.expertise', compact('expertises'));
    }
}
