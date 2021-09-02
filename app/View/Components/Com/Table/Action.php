<?php

namespace App\View\Components\Com\Table;

use Illuminate\View\Component;

class Action extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $id;
    public function __construct($id = null)
    {
        $this->url = url()->current();
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.com.table.action');
    }
}