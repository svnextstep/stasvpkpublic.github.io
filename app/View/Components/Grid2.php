<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Grid2 extends Component
{
  public $sClass;
    /**
     * Create a new component instance.
     */
    public function __construct($sClass = '')
    {
        $this->sClass = $sClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid2');
    }
}
