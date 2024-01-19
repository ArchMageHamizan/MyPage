<?php

namespace App\View\Components;

use Illuminate\View\Component;

class bussCard extends Component
{
    /**
     * Create a new component instance.
     * @return void
     */
    public $title; // define title variable
    public function __construct($data) // recieve argument data from every template that use bussCard component.
    {
        //
        $this->title=$data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buss-card');
    }
}
