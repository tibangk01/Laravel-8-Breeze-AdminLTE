<?php

namespace App\View\Components\App;

use Illuminate\View\Component;

class ContentHeader extends Component
{
    public $pageName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageName)
    {
        $this->pageName = $pageName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app.content-header');
    }
}
