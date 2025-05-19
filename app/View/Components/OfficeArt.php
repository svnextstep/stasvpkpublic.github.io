<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OfficeArt extends Component
{
  public $sClass;
  public $iId;
    /**
     * Create a new component instance.
     */
    public function __construct($sClass = '', $iId = '')
    {
      $this->sClass = $sClass;
      $this->iId = $iId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.office-art');
    }
}
