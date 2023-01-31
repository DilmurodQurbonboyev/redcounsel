<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class Authority extends Component
{
    public $searchId, $searchTitle, $searchStatus, $searchUser;
    use WithPagination;

    public $perPage = 20;
    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $users = User::all();
        $query = \App\Models\Authority::query();

        $query->when($this->searchId != "", function ($q) {
            return $q->where('id', $this->searchId);
        });

        $query->when($this->searchTitle != "", function ($q) {
            return $q->whereHas('translations', function (Builder $query) {
                $query->where(DB::raw('lower(title)'), 'like', '%' . strtolower($this->searchTitle) . '%');
            });
        });

        $query->when($this->searchStatus != "", function ($q) {
            return $q->where('status', $this->searchStatus);
        });

        $query->when($this->searchUser != "", function ($q) {
            return $q->where('creator_id', $this->searchUser);
        });

        $authorities = $query->orderByDesc('id')->paginate($this->perPage);
        return view('livewire.authority', compact('authorities', 'users'));
    }
}
