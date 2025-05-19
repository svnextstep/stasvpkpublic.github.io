<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabsList extends Component
{
  public $aTabItems;
  /**
     * Create a new component instance.
     */
    public function __construct($aTabItems)
    {
        $this->aTabItems = $aTabItems;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tabs-list');
    }
}
