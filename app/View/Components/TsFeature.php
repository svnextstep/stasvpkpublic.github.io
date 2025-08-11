<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TsFeature extends Component
{
  public $sTitle = "";
  public $sImg = "";
  public $detailClass = "";
  public $detailImgClass = "";
  public $detailBodyClass = "";
  /**
     * Create a new component instance.
     */
    public function __construct($sTitle = "", $sImg = "", $detailClass = "", $detailImgClass = "", $detailBodyClass = "")
    {
       $this->sTitle = $sTitle;
       $this->sImg = $sImg;
       $this->detailClass = $detailClass;
       $this->detailImgClass = $detailImgClass;
       $this->detailBodyClass = $detailBodyClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ts-feature');
    }
}
