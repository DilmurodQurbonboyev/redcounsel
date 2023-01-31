<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;


class User extends Component
{

    use WithPagination;

    public $searchId,
        $searchUsername,
        $searchAuthority;

    public $perPage = 20;
    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $query = \App\Models\User::query();

        $query->when($this->searchId != "", function ($q) {
            return $q->where('id', $this->searchId);
        });

        $query->when($this->searchUsername != "", function ($q) {
            return $q->where(DB::raw('lower(name)'), 'like', '%' . strtolower($this->searchUsername) . '%');
        });

        $users = $query->paginate($this->perPage);
        return view('livewire.user', compact('users'));
    }
}
