<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Interfaces\RegionRepositoryInterface;

class RegionController extends Controller
{
    private RegionRepositoryInterface $regionRepository;

    public function __construct(RegionRepositoryInterface $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

    public function index()
    {
        return view('admin.regions.index');
    }

    public function create()
    {
        $region = new Region();
        $regionLists = Region::query()->whereNull('parent_id')->get();
        return view('admin.regions.create', compact('region', 'regionLists'));
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            $this->regionRepository
                ->saveRegion($request);
            return redirect()
                ->route('regions.index')->with('success_save', tr('Successfully saved'));
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }

    public function show($id)
    {
        $region = $this->regionRepository->getById($id);
        return view('admin.regions.show', compact('region'));
    }

    public function edit($id)
    {
        $region = $this->regionRepository->getById($id);
        $regionLists = Region::query()->whereNull('parent_id')->get();
        return view('admin.regions.edit', compact('region', 'regionLists'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        try {
            $this->regionRepository
                ->updateRegion($request, $id);
            return redirect()
                ->route('regions.show', $id)
                ->with('success_update', tr('Successfully updated'));
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }

    public function destroy($id): RedirectResponse
    {
        try {
            $this->regionRepository->deleteRegion($id);
            return redirect()->route('regions.index');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', tr('Something went wrong'));
        }
    }
}
