<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabsContentItem extends Component
{
  public $sClass;
  public $classActive;
  
  /**
     * Create a new component instance.
     */
    public function __construct($sClass = false, $classActive = false)
    {
      $this->sClass = $sClass;
      $this->classActive = $classActive;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tabs-content-item');
    }
}
