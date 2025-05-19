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
      
      @yield('nav')
      
    </div>

    <div class="header__path"></div>
    
  </div>
</header>
