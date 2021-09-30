<?php

namespace App\View\Components\App;

use Illuminate\View\Component;

class Layout extends Component
{

    public $pageTitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
