<?php

namespace App\Interfaces;

interface RegionRepositoryInterface
{
    public function getById($id);

    public function saveRegion($request);

    public function updateRegion($request, $id);

    public function deleteRegion($id);
}
