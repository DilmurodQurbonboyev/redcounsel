<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class Message extends Component
{
    use WithPagination;

    public $perPage = 20;
    protected $paginationTheme = "bootstrap";

    public $searchId;
    public $searchKey;
    public $searchTitle;

    public function render()
    {
        $query = \App\Models\Message::query();

        $query->when($this->searchId != "", function ($q) {
            return $q->where('id', $this->searchId);
        });

        $query->when($this->searchKey != "", function ($q) {
            return $q->where(strtolower('key'), 'like', '%' . strtolower($this->searchKey) . '%');
        });

        $query->when($this->searchTitle != "", function ($q) {
            return $q->whereHas('translations', function (Builder $query) {
                $query->where(DB::raw('lower(title)'), 'like', '%' . strtolower($this->searchTitle) . '%');
            });
        });

        $messages = $query->orderByDesc('id')->paginate($this->perPage);
        return view('livewire.message', compact('messages'));
    }
}
