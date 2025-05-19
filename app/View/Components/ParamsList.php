<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ParamsList extends Component
{
  public $sClass;
  public $sLineAccent;


  /**
     * Create a new component instance.
     */
    public function __construct($sClass = '', $sLineAccent = 'show')
    {
     
      $this->sClass = $sClass;
      $this->sLineAccent = $sLineAccent;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.params-list');
    }
}
