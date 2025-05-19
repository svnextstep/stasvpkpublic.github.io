<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AnimPanel extends Component
{
  public $iId;
  public $sTitle;
  public $sSlogan;
    /**
     * Create a new component instance.
     */
    public function __construct($iId, $sTitle, $sSlogan)
    {
       $this->iId = $iId;
       $this->sTitle = $sTitle;
       $this->sSlogan =  $sSlogan;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.anim-panel');
    }
}
