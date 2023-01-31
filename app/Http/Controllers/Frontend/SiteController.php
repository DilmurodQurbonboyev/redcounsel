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
        $regions = Region::query()
            ->select([
                'id',
                'name_oz',
                'name_uz',
                'name_ru'
            ])
            ->whereNull('parent_id')
            ->paginate(20);

        $category = MCategory::query()
            ->where('slug', $slug)
            ->where('status', 2)
            ->with(
                [
                    'translations' => function ($query) {
                        $query->where('locale', app()->getLocale());
                    },
                ]
            )
            ->first();

        if ($category->id == 2) {
            $view = 'frontend.regional';
        } else {
            $view = 'frontend.management';
        }

        $leaders = Management::query()
            ->where('m_category_id', $category->id)
            ->orderBy('order')
            ->where('status', 2)
            ->paginate(12);

        return view($view, compact('leaders', 'category', 'regions'));
    }

    public function category($slug)
    {
        $categories = ListCategory::query()
            ->where('list_type_id', 1)
            ->where('parent_id', '!=', null)
            ->where('status', 2)
            ->with('lists')
            ->get();
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

        $view = $category->file;

        switch ($category->list_type_id) {
            case ListType::NEWS:
                $view = 'frontend.news';
                break;
            case ListType::PAGE:
                $view = $category->listFile->path;
                break;
            case ListType::PHOTO:
                $view = 'frontend.photoGallery';
                break;
            case ListType::ANSWER:
                $view = 'frontend.accordion';
                break;
            case ListType::VIDEO:
                $view = 'frontend.videoGallery';
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

        return view($view, compact('lists', 'category', 'categories'));
    }

    public function news($slug)
    {
        $list = Lists::getList()->where('lists.slug', $slug)->first();
        if (is_null($list)) {
            return view('frontend.errors.404');
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
        $contact = Contact::query()->first();
        return view('frontend.contact', compact('contact'));
    }

    public function rss(): Response
    {
        $posts = Lists::query()->where('list_type_id', ListType::NEWS)->latest()->get();
        return response()->view('frontend.rss', compact('posts'))->header('Content-Type', 'text/xml');
    }
}
