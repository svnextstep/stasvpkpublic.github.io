<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ParamsItem extends Component
{
  public $sName;
  /**
     * Create a new component instance.
     */
    public function __construct($sName)
    {
      $this->sName = $sName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.params-item');
    }
}
