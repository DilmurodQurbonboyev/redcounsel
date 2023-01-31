<?php

namespace App\View\Components\Admin\Category;

use Illuminate\View\Component;

class TableButton extends Component
{
    public $route;
    public $title;

    public function __construct($route, $title)
    {
        $this->route = $route;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.admin.category.table-button');
    }
}
