<div class="region-office {{ $sClass }}" @if ($iId) id="{{ $iId }}" @endif>
  
  <div class="region-office__signature">{{ $slot }}</div>
  
  <div class="region-office__img">
    <img src="{{asset('/img/icons/house.png')}}" width="80" height="auto" alt="" loading='lazy'/>
  </div>

</div>