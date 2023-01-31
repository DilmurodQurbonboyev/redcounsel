<?php

namespace Database\Seeders\Backup;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/backups/regions.json");
        $regions = json_decode($json);

        foreach ($regions as $region) {
            Region::query()->create([
                "id" => $region->id,
                "parent_id" => $region->parent_id,
                "name_oz" => $region->name_oz,
                "name_uz" => $region->name_uz,
                "name_ru" => $region->name_ru,
                "name_en" => $region->name_en,
                'regional_center' => $region->regional_center,
                "status" => $region->status,
            ]);
        }
    }
}
