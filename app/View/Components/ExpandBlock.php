<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ExpandBlock extends Component
{
  
  public $sTitle;
  public $sClass;
  /**
     * Create a new component instance.
     */
    public function __construct($sTitle, $sClass = '')
    {
       $this->sTitle = $sTitle;
       $this->sClass = $sClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.expand-block');
    }
}
