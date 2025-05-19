<div class="square open-popup__link @isset ($sWrapperClass) {{ $sWrapperClass }} @endisset">
  <div class="square__bg">
    @if ($sImgName)
    <img class="square__bg-img" src="{{ asset('/img/tv_system/components/squares/'.$sImgName.'.jpg') }}"/>
    @endif
  </div>
  <div @isset ($iId) id="{{ $iId }}" @endisset  class="square__content @isset ($sClass) {{ $sClass }} @endisset">
    {{ $slot }}
  </div>
</div>