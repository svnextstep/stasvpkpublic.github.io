<nav class="header__menu">
  <div class="close-button-wrapper">
    <button id="burger-menu-close" class="cross-button visible-mobile" type="button">
      <span class="visually-hidden">Close navigation menu</span>
    </button>    
  </div>

  
  <ul class="header__menu-list">
    
    {{-- ABOUT --}}
    <li class="menu-item" data-point-parent>
      
      <div class="menu-item__link" data-point-link>
        <span class="menu-item__name">{{ __('messages.about') }}</span>
        <x-arrow-expand></x-arrow-expand>
      </div>
      
      {{-- submenu --}}
      <div class="sub-menu appear-panel-hidden" data-point-hide-panel="appear-panel">
        <ul class="sub-menu__list">
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('about')}}">{{ __('messages.about') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('clients')}}">{{ __('messages.clients') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('massmedia')}}">{{ __('messages.massmedia') }}</a>
          </li>
        </ul>
      </div>
      
    </li>
    
    {{-- TV --}}
    <li class="menu-item" data-point-parent>
      
      <div class="menu-item__link" data-point-link>
        <span class="menu-item__name">{{ __('messages.tvsystem') }}</span>
        <x-arrow-expand></x-arrow-expand>
      </div>
      
      {{-- submenu --}}
      <div class="sub-menu appear-panel-hidden" data-point-hide-panel="appear-panel">
        <ul class="sub-menu__list">
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('ts_descr')}}">{{ __('messages.description') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('tvsystem')}}">{{ __('messages.components') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('lenses')}}">{{ __('messages.lenses') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('ts_models')}}">{{ __('messages.ts_models') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('net')}}">{{ __('messages.net') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('interactive_map')}}">{{ __('messages.interactive_map') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('services')}}#protection">{{ __('messages.protection') }}</a>
          </li>
        </ul>
      </div>
      
    </li>
 
    {{-- TOWER --}}
     <li class="menu-item">
      <div class="menu-item__link">
        <a class="menu-item__name" href="{{route('tower')}}">{{ __('messages.tower') }}</a>
      </div>
    </li> 
    
    {{-- PPOJECTS --}}
    <li class="menu-item" data-point-parent>
      
      <div class="menu-item__link" data-point-link>
        <span class="menu-item__name">{{ __('messages.projects') }}</span>
        <x-arrow-expand></x-arrow-expand>
      </div>
      
      {{-- submenu --}}
      <div class="sub-menu appear-panel-hidden" data-point-hide-panel="appear-panel">
        <ul class="sub-menu__list">

          {{-- ANIMAL OBSERVATION --}}
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('photo_traps')}}">{{ __('messages.photo_traps') }}</a>
          </li>
          {{-- supervision of a woodworking enterprise --}}
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('control_sawmill')}}">{{ __('messages.subordinate')}}</a>
          </li>
          
        </ul>
      </div>
      
    </li>
    
    {{-- SERVICES --}}
    <li class="menu-item" data-point-parent>
      <div class="menu-item__link" data-point-link>
        <span class="menu-item__name">Services</span>
        <x-arrow-expand></x-arrow-expand>
      </div>
      
      {{-- submenu --}}
      <div class="sub-menu appear-panel-hidden" data-point-hide-panel="appear-panel">
        <ul class="sub-menu__list">

          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('services')}}">{{ __('messages.support') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('services')}}#protection">{{ __('messages.protection') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('services')}}#tower_old">{{ __('messages.tower_old') }}</a>
          </li>
          <li class="sub-menu__item">
            <a class="sub-menu__link" href="{{route('services')}}#walkie_talkie">{{ __('messages.walkie_talkie') }}</a>
          </li>
        </ul>
      </div>

    </li>
    
    {{-- ARTICALS --}}
     <li class="menu-item">
      <div class="menu-item__link">
        <a class="menu-item__name" href="{{route('articals')}}">{{ __('messages.articals') }}</a>
      </div>
    </li>
    
    {{-- CONTACTS --}}
     <li class="menu-item">
      <div class="menu-item__link">
        <a class="menu-item__name" href="{{route('contacts')}}">{{ __('messages.contacts') }}</a>
      </div>
    </li>
  </ul>
</nav>

<button id="burger-menu"
  class="button__burger-menu burger-button visible-mobile" 
  type="button"
  >
  <span class="visually-hidden">Open navigation menu</span>
</button>
