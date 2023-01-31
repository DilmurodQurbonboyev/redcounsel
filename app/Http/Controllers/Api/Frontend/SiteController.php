<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ListCategory;
use App\Models\Lists;
use App\Models\Management;
use App\Models\MCategory;
use App\Models\Menu;
use App\Models\Region;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function regions(Request $request)
    {
        $lang = $request->query('lang');
        $region = $request->query('region');
//        dd();
//        ?lang=oz
        $regions = Region::query()
            ->select([
                'id',
                "name_$lang as title",
                'parent_id'
            ])
            ->where('parent_id', $region)
            ->get();
        return response()->json($regions);
    }

    public function menus(Request $request): JsonResponse
    {
        $top_menu = Menu::query()
            ->select([
                'menus.id',
                'menus.link',
                'menus.link_type',
                'menus.parent_id',
                'menu_translations.title'
            ])
            ->join('menu_translations', 'menus.id', '=', 'menu_translations.menu_id')
            ->where('menu_translations.title', '!=', null)
            ->where('menu_translations.locale', '=', $request->query('lang'))
            ->where('menus.menus_category_id', 1)
            ->where('menus.status', 2)
            ->orderBy('menus.order')
            ->orderBy('menus.id')
            ->get();
        $top_menu_tree = Menu::buildTree($top_menu->toArray());
        return response()->json($top_menu_tree);
    }

    public function categoryList(Request $request): JsonResponse
    {
        $category = ListCategory::query()
            ->where('list_type_id', 1)
            ->where('id', 1)
            ->where('status', 2)
            ->first();

        $lists = Lists::query()
            ->select([
                'lists.id',
                'lists_translations.title',
                'lists_translations.description',
                'lists_translations.content',
                'lists_translations.pdf_title',
                'lists_translations.pdf',
                'lists.anons_image',
                'lists.image',
                'lists.body_image',
                'lists.date',
                'lists.slug',
                'lists.count_view',
                'lists.video',
                'lists.media_type',
                'lists.link_type',
                'lists.link',
                'lists.video_code',
                'lists.show_on_slider',
                'list_category_translations.title as category_title',
                'list_categories.slug as category_slug'
            ])
            ->join('lists_translations', 'lists.id', '=', 'lists_translations.lists_id')
            ->join('list_categories', 'lists.lists_category_id', '=', 'list_categories.id')
            ->join('list_category_translations', 'list_categories.id', '=', 'list_category_translations.list_category_id')
            ->where('lists_translations.title', '!=', null)
            ->where('lists_translations.locale', '=', $request->query('lang'))
            ->where('list_category_translations.title', '!=', null)
            ->where('list_category_translations.locale', '=', $request->query('lang'))
            ->where('lists.list_type_id', 1)
            ->where('lists.lists_category_id', '!=', '1')
            ->where('lists.status', 2)
            ->orderBy('lists.date', 'desc')
            ->orderBy('lists.order')
            ->paginate(12);

        return response()->json([
            'lists' => $lists,
            'category' => $category
        ]);
    }

    public function leader(Request $request, $slug): JsonResponse
    {
        $regions = Region::query()
            ->select([
                'id',
                'name_oz',
                'name_uz',
                'name_ru'
            ])
            ->whereNull('parent_id')
            ->get();

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

        $leaders = Management::query()
            ->where('m_category_id', $category->id)
            ->orderBy('order')
            ->where('status', 2)
            ->paginate(12);

        return response()->json([
            'regions' => $regions,
            'leaders' => $leaders
        ]);
    }
}
