<?php

namespace App\Http\Livewire;

use App\Models\ListCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Lists;
use Livewire\WithPagination;


class Pages extends Component
{
    use WithPagination;

    public $filter_id,
        $filter_title,
        $filter_category,
        $filter_slug,
        $filter_count_view,
        $filter_status,
        $filter_description,
        $filter_user;

    public $perPage = 20;
    protected $paginationTheme = "bootstrap";


    public function render()
    {
        $users = User::all();
        $pagesCategories = ListCategory::query()->where('list_type_id', 5)->get();
        $query = Lists::query()->where('list_type_id', 5);

        $query->when($this->filter_id != "", function ($q) {
            return $q->where('id', $this->filter_id);
        });

        $query->when($this->filter_category != "", function ($q) {
            return $q->where('lists_category_id', $this->filter_category);
        });

        $query->when($this->filter_category != "", function ($q) {
            return $q->where('lists_category_id', $this->filter_category);
        });

        $query->when($this->filter_title != "", function ($q) {
            return $q->whereHas('translations', function (Builder $query) {
                $query->where(DB::raw('lower(title)'), 'like', '%' . strtolower($this->filter_title) . '%');
            });
        });

        $query->when($this->filter_slug != "", function ($q) {
            return $q->where(DB::raw('lower(slug)'), 'like', '%' . strtolower($this->filter_slug) . '%');
        });

        $query->when($this->filter_description != "", function ($q) {
            return $q->whereHas('translations', function (Builder $query) {
                $query->where(DB::raw('lower(description)'), 'like', '%' . strtolower($this->filter_description) . '%');
            });
        });

        $query->when($this->filter_count_view != "", function ($q) {
            return $q->where('count_view', $this->filter_count_view);
        });

        $query->when($this->filter_status != "", function ($q) {
            return $q->where('status', $this->filter_status);
        });

        $query->when($this->filter_user != "", function ($q) {
            return $q->where('creator_id', $this->filter_user);
        });

        $pages = $query->paginate($this->perPage);
        return view('livewire.pages', compact('pagesCategories', 'pages', 'users'));
    }
}
