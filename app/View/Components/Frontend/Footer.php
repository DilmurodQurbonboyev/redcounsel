<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;

class Footer extends Component
{
    public $top_menu;
    public $top_menu_tree;

    public function __construct()
    {
        $this->top_menu = \App\Models\Menu::getMenuItems(1);
        $this->top_menu_tree = \App\Models\Menu::buildTree($this->top_menu->toArray());
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.footer');
    }
}
