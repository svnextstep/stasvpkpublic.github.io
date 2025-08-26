@section('nav')
  @include('layouts.inc.nav')
@endsection

@section('header')

<header class="header">
  <div class="header__inner">
    
    <div class="header__top-line"></div>

    <div class="header__body">
      
      <a class="header__logo">
        
        <img class="logo__image" src="{{ asset('img/logo_top.png') }}" width="140" height="70" alt="VPK group" loading="lazy"/>
      </a>
      
      <div class="header__phones">
        <div>
          <div>(099) 5404004</div>
          <div>(068) 8404004</div>
          <div>(057) 72-82446</div>
        </div>
        
        <div>
          <div>Украина, г. Харьков,</br> ул.Рождественская, 29-б</div>
          <div>e-mail: vpktech@ukr.net</div>
        </div>
      </div>
      
      <div>
         @yield('nav')
      </div>
    </div>

    <div class="header__path"></div>
    
  </div>
</header>
