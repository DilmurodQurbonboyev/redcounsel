<?php

namespace App\View\Components\Frontend;

use App\Models\Contact;
use App\Models\Menu;
use Illuminate\View\Component;

class Footer extends Component
{
    public $top_menu;
    public $top_menu_tree;
    public $contact;

    public function __construct()
    {
        $this->top_menu = Menu::getMenuItems(1);
        $this->top_menu_tree = Menu::buildTree($this->top_menu->toArray());
        $this->contact = Contact::query()->first();
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
