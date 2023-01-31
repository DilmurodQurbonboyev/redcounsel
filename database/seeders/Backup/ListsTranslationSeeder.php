<?php

namespace Database\Seeders\Backup;

use Illuminate\Database\Seeder;
use App\Models\ListsTranslation;
use Illuminate\Support\Facades\File;

class ListsTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/backups/lists_translations.json");
        $lists = json_decode($json);

        foreach ($lists as $list) {
            ListsTranslation::query()->create([
                "id" => $list->id,
                "lists_id" => $list->lists_id,
                "title" => $list->title,
                "description" => $list->description,
                "content" => $list->content,
                "pdf_title" => $list->pdf_title,
                "pdf" => $list->pdf,
                "locale" => $list->locale,
            ]);
        }
    }
}
