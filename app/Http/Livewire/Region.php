<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class Region extends Component
{
    use WithPagination;


    public $perPage = 20;
    protected $paginationTheme = "bootstrap";

    public $filter_id;
    public $filter_name;
    public $filter_parent_id;
    public $filter_regionalCenter;


    public function render()
    {
        $regionLists = \App\Models\Region::query()->whereNull('parent_id')->get();
        $name = "name_" . app()->getLocale();
        $query = \App\Models\Region::query();

        $query->when($this->filter_id != "", function ($q) {
            return $q->where('id', $this->filter_id);
        });

        $query->when($this->filter_parent_id != "", function ($q) {
            return $q->where('parent_id', $this->filter_parent_id);
        });

        $query->when($this->filter_name != "", function ($q) use ($name) {
            return $q->where(Str::lower($name), 'like', '%' . strtolower($this->filter_name) . '%');
        });

        $query->when($this->filter_regionalCenter != "", function ($q) {
            return $q->where('regional_center', 'like', '%' . $this->filter_regionalCenter . '%');
        });

        $regions = $query->paginate($this->perPage);

        return view('livewire.region', compact('regions', 'regionLists'));
    }
}
