<?php

namespace Database\Seeders\Backup;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\ListCategoryTranslation;

class ListCategoryTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/backups/list_category_translations.json");
        $listCategories = json_decode($json);

        foreach ($listCategories as $listCategory) {
            ListCategoryTranslation::query()->create([
                "id" => $listCategory->id,
                "list_category_id" => $listCategory->list_category_id,
                "title" => $listCategory->title,
                "locale" => $listCategory->locale,
            ]);
        }
    }
}
