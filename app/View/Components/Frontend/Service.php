<?php

namespace App\View\Components\Frontend;

use App\Models\Lists;
use Illuminate\View\Component;

class Service extends Component
{
    public $services;

    public function __construct()
    {
        $this->services = Lists::getList()
        ->where('lists.list_type_id', 5)
        ->where('lists.lists_category_id', 8)
        ->where('lists.status', 2)
        ->orderBy('lists.date', 'desc')
        ->orderBy('lists.order')
        ->get();
    }

    public function render()
    {
        return view('components.frontend.service');
    }
}
