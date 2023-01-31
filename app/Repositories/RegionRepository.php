<?php

namespace App\Repositories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\RegionRepositoryInterface;


class RegionRepository extends Model implements RegionRepositoryInterface
{
    public function getById($id)
    {
        return Region::query()
            ->findOrFail($id);
    }

    public function saveRegion($request)
    {
        Region::query()
            ->create([
                'parent_id' => $request->parent_id,
                'name_oz' => $request->name_oz,
                'name_uz' => $request->name_uz,
                'region_ru' => $request->region_ru,
                'regional_center' => $request->regional_center,
                'status' => $request->status,
            ]);
    }

    public function updateRegion($request, $id)
    {
        Region::query()
            ->findOrFail($id)
            ->update([
                'parent_id' => $request->parent_id,
                'name_oz' => $request->name_oz,
                'name_uz' => $request->name_uz,
                'region_ru' => $request->region_ru,
                'regional_center' => $request->regional_center,
                'status' => $request->status,
            ]);
    }

    public function deleteRegion($id)
    {
        Region::query()
            ->findOrFail($id)
            ->delete();
    }
}
