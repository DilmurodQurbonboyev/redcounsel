<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;

use App\Models\Lists;

class Banner extends Component
{
    public $banners;

    public function __construct()
    {
        $this->banners = Lists::getList()
        ->where('lists.list_type_id', 5)
        ->where('lists.lists_category_id', 9)
        ->where('lists.status', 2)
        ->orderBy('lists.date', 'desc')
        ->orderBy('lists.order')
        ->get();
    }

    public function render()
    {
        return view('components.frontend.banner');
    }
}
