<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopupDetails extends Component
{
  public $sTitle;
  public $iId;
  public $sClass;
  public $aFooter;
    /**
     * Create a new component instance.
     */
    public function __construct($sTitle, $iId = false, $sClass = false, $aFooter = false)
    {
      $this->sTitle = $sTitle;
      $this->iId = $iId;
      $this->sClass = $sClass;
      $this->aFooter = $aFooter;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.popup-details');
    }
}
