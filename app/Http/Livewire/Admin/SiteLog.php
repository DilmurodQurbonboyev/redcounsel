<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;

class SiteLog extends Component
{
    use WithPagination;

    public $perPage = 20;
    protected $paginationTheme = "bootstrap";


    public function render()
    {
        $users = User::query()->get();
        $logs = \App\Models\SiteLog::query()->orderByDesc('id')->paginate(20);
        return view('livewire.admin.site-log', compact('users', 'logs'));
    }
}
