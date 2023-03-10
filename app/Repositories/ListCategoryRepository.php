<?php

namespace App\Repositories;

use App\Interfaces\ListCategoryRepositoryInterface;
use App\Models\ListCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ListCategoryRepository extends Model implements ListCategoryRepositoryInterface
{
    public function getById($id)
    {
        return ListCategory::query()->findOrFail($id);
    }

    public function saveCategory($request, $listCategory)
    {
        $slug = '';
        $slugArray = [
            $request->title_oz,
            $request->title_uz,
            $request->title_ru,
            $request->title_en,
        ];

        foreach ($slugArray as $item) {
            if (!is_null($item)) {
                $slug = $listCategory->makeSlug($item);
                break;
            }
        }

        ListCategory::query()->create([
            'oz' => [
                'title' => $request->title_oz,
            ],
            'uz' => [
                'title' => $request->title_uz,
            ],
            'ru' => [
                'title' => $request->title_ru,
            ],
            'en' => [
                'title' => $request->title_en,
            ],
            'list_type_id' => $request->list_type_id,
            'list_file_id' => $request->list_file_id,
            'parent_id' => $request->parent_id,
            'image' => $request->image,
            'slug' => $slug,
            'status' => $request->status,
            'creator_id' => auth()->user()->id,
        ]);
    }

    public function updateCategory($request, $id)
    {
        ListCategory::query()->findOrFail($id)->update([
            'oz' => [
                'title' => $request->title_oz,
            ],
            'uz' => [
                'title' => $request->title_uz,
            ],
            'ru' => [
                'title' => $request->title_ru,
            ],
            'en' => [
                'title' => $request->title_en,
            ],
            'list_type_id' => $request->list_type_id,
            'list_file_id' => $request->list_file_id,
            'parent_id' => $request->parent_id,
            'image' => $request->image,
            'order' => $request->order,
            'status' => $request->status,
            'modifier_id' => auth()->user()->id,
        ]);
    }

    public function deleteCategory($id)
    {
        ListCategory::query()->findOrFail($id)->delete();
    }
}
