<?php

namespace App\View\Components\Frontend;

use App\Models\Lists;
use Illuminate\View\Component;

class About extends Component
{
    public $about;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->about = Lists::getList()
            ->where('lists.list_type_id', 5)
            ->where('lists.lists_category_id',  2)
            ->first();
        dd($this->about);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.about');
    }
}
