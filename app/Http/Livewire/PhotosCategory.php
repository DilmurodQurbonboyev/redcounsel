<?php

namespace App\Http\Livewire;

use App\Models\ListCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ListCategoryExport;


class PhotosCategory extends Component
{

    public $filter_id,
        $filter_title,
        $filter_parent_id,
        $filter_slug,
        $filter_status,
        $filter_user;

    use WithPagination;
    public $perPage = 20;
    protected $paginationTheme = "bootstrap";


    public function render()
    {
        $users = User::all();

        $query = ListCategory::query()->where('list_type_id', 7);

        $photosParent = ListCategory::query()
            ->where('list_type_id', 7)
            ->get();

        $query->when($this->filter_id != "", function ($q) {
            return $q->where('id', $this->filter_id);
        });

        $query->when($this->filter_parent_id != "", function ($q) {
            return $q->where('parent_id', $this->filter_parent_id);
        });

        $query->when($this->filter_title != "", function ($q) {
            return $q->whereHas('translations', function (Builder $query) {
                $query->where(DB::raw('lower(title)'), 'like', '%' . strtolower($this->filter_title) . '%');
            });
        });

        $query->when($this->filter_status != "", function ($q) {
            return $q->where('status', $this->filter_status);
        });

        $query->when($this->filter_slug != "", function ($q) {
            return $q->where(DB::raw('lower(slug)'), 'like', '%' . strtolower($this->filter_slug) . '%');
        });

        $query->when($this->filter_user != "", function ($q) {
            return $q->where('creator_id', $this->filter_user);
        });

        $photos = $query->paginate($this->perPage);

        return view('livewire.photos-category', compact('users', 'photosParent', 'photos'));
    }

    public function export($format)
    {
        return Excel::download(new ListCategoryExport, "photos-category.$format");
    }

}
