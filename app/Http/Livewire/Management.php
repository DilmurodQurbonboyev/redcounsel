<?php

namespace App\Http\Livewire;

use App\Models\MCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;


class Management extends Component
{
    use WithPagination;

    public $perPage = 20;
    protected $paginationTheme = "bootstrap";


    public $filter_id,
        $filter_title,
        $filter_category,
        $filter_status,
        $filter_leader,
        $filter_user;

    public function render()
    {
        $users = User::all();
        $managementCategories = MCategory::query()->where('list_type_id', 10)
            ->get();

        $query = \App\Models\Management::where('list_type_id', 10);

        $query->when($this->filter_id != "", function ($q) {
            return $q->where('id', $this->filter_id);
        });

        $query->when($this->filter_category != "", function ($q) {
            return $q->where('m_category_id', $this->filter_category);
        });

        $query->when($this->filter_title != "", function ($q) {
            return $q->whereHas('translations', function (Builder $query) {
                $query->where(DB::raw('lower(title)'), 'like', '%' . strtolower($this->filter_title) . '%');
            });
        });

        $query->when($this->filter_leader != "", function ($q) {
            return $q->whereHas('translations', function (Builder $query) {
                $query->where(DB::raw('lower(leader)'), 'like', '%' . strtolower($this->filter_leader) . '%');
            });
        });

        $query->when($this->filter_status != "", function ($q) {
            return $q->where('status', $this->filter_status);
        });

        $query->when($this->filter_user != "", function ($q) {
            return $q->where('creator_id', $this->filter_user);
        });

        $managements = $query->paginate($this->perPage);

        return view('livewire.management', compact('managements', 'users', 'managementCategories'));
    }
}
