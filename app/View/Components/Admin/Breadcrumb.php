<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $id;
    public $title;
    public $breadcrumb;

    public function __construct($title = null, $breadcrumb, $id = null)
    {
        $this->title = $title;
        $this->id = $id;
        $this->breadcrumb = $breadcrumb;
    }

    public function render()
    {
        return view('components.admin.breadcrumb');
    }
}
