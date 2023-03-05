<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;
use App\Models\Lists;

class Partner extends Component
{
    public $partners;

    public function __construct()
    {
        $this->partners = Lists::getList()
        ->where('lists.list_type_id', 6)
        ->where('lists.lists_category_id', 13)
        ->where('lists.status', 2)
        ->orderBy('lists.date', 'desc')
        ->orderBy('lists.order')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.partner');
    }
}
