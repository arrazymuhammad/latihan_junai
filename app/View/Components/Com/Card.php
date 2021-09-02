<?php

namespace App\View\Components\Com;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $cardClass;
    public $cardTitle;
    public function __construct($cardTitle = null, $cardClass = 'card-default')
    {
        $this->cardClass = $cardClass;
        $this->cardTitle = $cardTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.com.card');
    }
}
