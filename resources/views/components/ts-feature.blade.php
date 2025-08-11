<div class="ts-features__item  @isset ($detailClass) {{$detailClass}} @endisset">
  <div class="feature-detail">

    <div class="feature-detail__img @isset ($detailImgClass) {{$detailImgClass}} @endisset">
      @if (!empty($sImg))
        <img src="{{asset('/img/' . $sImg)}}" width="200" height="200" alt=""/>
      @endif
    </div>

    <div class="feature-detail__body @isset ($detailBodyClass) {{$detailBodyClass}} @endisset">
      <div class="feature-detail__title">{{$sTitle}}</div>
      <div class="feature-detail__descr">{{$slot}}</div>
    </div>
    
  </div>
</div>