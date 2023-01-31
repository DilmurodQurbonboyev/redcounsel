<?php

namespace Database\Seeders\Backup;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ListCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/backups/list_categories.json");
        $listCategories = json_decode($json);

        foreach ($listCategories as $listCategory) {
            DB::table('list_categories')->insert([
                "id" => $listCategory->id,
                "list_type_id" => $listCategory->list_type_id,
                "list_file_id" => $listCategory->list_file_id,
                "parent_id" => $listCategory->parent_id,
                "slug" => $listCategory->slug,
                "image" => $listCategory->image,
                "status" => $listCategory->status,
                "creator_id" => $listCategory->creator_id,
                "created_at" => $listCategory->created_at,
                "updated_at" => $listCategory->updated_at
            ]);
        }
    }
}
