<div class="tabs">
  
  <div class="tabs__row">
    @foreach ($aTabItems as $sItem)
    <div class="tabs__item @if ($loop->index === 0) _active @endif" data-item="tabs">{{$sItem}}</div>
    @endforeach
  </div>

  <div class="tabs__content">
    {{$slot}}
  </div>
  
</div>