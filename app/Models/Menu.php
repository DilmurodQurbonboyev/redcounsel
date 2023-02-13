<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Menu extends Model implements TranslatableContract
{
    use HasFactory, SoftDeletes, Translatable;

    public $useTranslationFallback = true;

    public $translatedAttributes = ['title'];

    protected $fillable = [
        'link',
        'link_type',
        'image',
        'parent_id',
        'menus_category_id',
        'status',
        'order',
        'creator_id',
        'modifier_id',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    public function modifiers(): BelongsTo
    {
        return $this->belongsTo(User::class, 'modifier_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function submenus($lang)
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id')
            ->with(
                [
                    'translations' => function ($query) use ($lang) {
                        $query->where('locale', $lang);
                    }
                ]
            );
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(MenusCategory::class, 'menus_category_id');
    }

    public static function getMenuItems($category)
    {
        return self::query()
            ->select([
                'menus.id',
                'menus.link',
                'menus.link_type',
                'menus.parent_id'
            ])
            ->join('menu_translations', 'menus.id', '=', 'menu_translations.menu_id')
            ->where('menu_translations.title', '!=', null)
            ->where('menu_translations.locale', '=', app()->getLocale())
            ->where('menus.menus_category_id', $category)
            ->where('menus.status', 2)
            ->orderBy('menus.order')
            ->orderBy('menus.id')
            ->get();
    }

    public static function buildTree(array $elements, $parentId = null): array
    {
        $tree = array();
        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = self::buildTree($elements, $element['id']);
                if ($children) {
                    $element['submenus'] = $children;
                }
                $tree[] = $element;
            }
        }
        return $tree;
    }
}
