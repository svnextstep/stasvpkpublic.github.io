<div class="expand-block @if ($sClass) {{ $sClass }} @endif" data-point-parent="">
  <div class="expand-block__title">
    <h5>{{$sTitle}}</h5>
    <div data-point-link="">
      <x-arrow-expand></x-arrow-expand>
    </div>
    
  </div>
  
  <div class="expand-block__body" data-point-hide-panel="expand-panel">
    {{$slot}}
  </div>
</div>