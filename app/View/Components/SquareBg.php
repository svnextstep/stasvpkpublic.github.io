<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SquareBg extends Component
{
  public $iId;
  public $sClass;
  public $sWrapperClass;
  public $sImgName;
    /**
     * Create a new component instance.
     */
    public function __construct($iId = false, $sClass = '', $sImgName = '', $sWrapperClass='')
    {
        $this->iId = $iId;
        $this->sClass = $sClass;
        $this->sImgName = $sImgName;
        $this->sWrapperClass = $sWrapperClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.square-bg');
    }
}
