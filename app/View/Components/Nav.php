<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{

    public $type;

    public $menu;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $menu)
    {
        $this->type = $type;
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.nav');
    }
}
