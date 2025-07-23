<div  @isset ($iId) id="{{ $iId }}" @endisset class="popup @isset ($sClass) {{ $sClass }} @endisset ">
  <div class="popup__wrapper">
    <div class="popup__body">
      
      <div class="popup__header">
        <div class="title">{{ $sTitle }}</div>
        <div class="popup-close-button"></div>
      </div>

      <div class="popup__content">
        {{ $slot }}
      </div>
      
      <div class="popup__footer">
        @if ($aFooter && $aFooter['sBtnMainName']) 
          <a class="btn__main" href="{{ route($aFooter['sBtnMainLink']) }}">{{ $aFooter['sBtnMainName'] }}</a>
        @endif
      </div>
      
    </div>
  </div>
    
</div>