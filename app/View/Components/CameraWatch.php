<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CameraWatch extends Component
{
    
    public $sBlockAddClass;
    public $sAreaAddClass;
    public $iId;
    /**
     * Create a new component instance.
     */
  public function __construct($sBlockAddClass = false, $sAreaAddClass = false, $iId = false)
  {
    
    $this->sBlockAddClass = $sBlockAddClass;
    $this->sAreaAddClass = $sAreaAddClass;
    $this->iId = $iId;
  }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.camera-watch');
    }
}
