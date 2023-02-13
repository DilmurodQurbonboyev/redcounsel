<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;


class Lists extends Model implements TranslatableContract
{
    use Translatable, Sluggable;

    public $useTranslationFallback = true;

    public $translatedAttributes = [
        'title',
        'description',
        'content',
        'pdf_title',
        'pdf',
    ];


    protected $fillable = [
        'list_type_id',
        'lists_category_id',
        'slug',
        'image',
        'anons_image',
        'body_image',
        'show_on_slider',
        'pdf_type',
        'video_code',
        'video',
        'media_type',
        'link',
        'link_type',
        'right_menu',
        'date',
        'order',
        'count_view',
        'status',
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

    public function types(): BelongsTo
    {
        return $this->belongsTo(ListType::class, 'lists_types');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'title');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ListCategory::class, 'lists_category_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function makeSlug($slugable): string
    {
        return SlugService::createSlug(self::class, 'slug', $slugable, ['unique' => true]);
    }

    public static function getList(): Builder
    {
        return self::query()
            ->select([
                'lists.id',
                'lists.image',
                'lists.anons_image',
                'lists.body_image',
                'lists.slug',
                'lists.date',
                'lists.link',
                'lists.media_type',
                'lists.count_view',
                'lists.link_type',
                'lists.pdf_type',
                'lists.video_code',
                'lists.video',
                'list_categories.id as category_id',
                'list_category_translations.title as category',
                'list_categories.slug as category_slug',
                'lists_translations.title as title',
                'lists_translations.description as description',
                'lists_translations.content as content',
                'lists_translations.pdf as pdf',
                'lists_translations.pdf_title as pdf_title',
            ])
            ->join('lists_translations', 'lists.id', '=', 'lists_translations.lists_id')
            ->join('list_categories', 'lists.lists_category_id', '=', 'list_categories.id')
            ->join('list_category_translations', 'list_categories.id', '=', 'list_category_translations.list_category_id')
            ->where('lists_translations.title', '!=', null)
            ->where('lists_translations.locale', '=', app()->getLocale())
            ->where('list_category_translations.title', '!=', null)
            ->where('list_category_translations.locale', '=', app()->getLocale());
    }
}
