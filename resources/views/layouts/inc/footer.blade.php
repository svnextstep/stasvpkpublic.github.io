<footer class="footer">
  <div class="footer__inner">
    
    <div class="footer__lang">
      <ul class="footer__lang-list">
        <li class="footer__lang-item @if(Session::has('locale') && Session::get('locale') == 'ua')_active @endif">
          <a href="#">ua</a>
        </li>
        <li class="footer__lang-item @if(!Session::has('locale') || (Session::has('locale') && Session::get('locale') == 'en') )_active @endif">
          <a href="{{ route('locale', ['locale' => 'en']) }}">{{ __('en') }}</a>
        </li>
        <li class="footer__lang-item @if(Session::has('locale') && Session::get('locale') == 'ru')_active @endif">
          <a href="{{ route('locale', ['locale' => 'ru']) }}">{{ __('ru') }}</a>
        </li>
      </ul>
    </div>
    
    <div class="footer__body">
      
      <div class="footer__body-item">
        <div class="body-item__row">
          
          <div class="body-item__row-item">
            <img src="{{asset('/img/vpk.png')}}" width="130" height="auto" alt="VPK logo" loading="lazy" />
          </div>
          
          <div class="body-item__row-item phones">
            <div>(099) 5404004</div>
            <div>(068) 8404004</div>
            <div>(057) 72-82446</div>
          </div>
          
          <div class="body-item__row-item">e-mail: vpktech@ukr.net</div>
          
        </div>
      </div>
      
      <div class="footer__body-item">
        <div class="footer__menu">
          
          <div class="expand-block " data-point-parent="">
            <div class="expand-block__title">
              <span>{{ __('messages.about') }}</span>
              <div data-point-link="">
                <x-arrow-expand></x-arrow-expand>
              </div>
            </div>

            <div class="expand-block__body" data-point-hide-panel="expand-panel">
              @foreach ([
                'about' => 'about',
                'clients' => 'clients',
                'massmedia' => 'massmedia',
              ] as $sLink => $sTr)
                <a class="_no-underline" href="{{route($sLink)}}">{{ __('messages.' . $sTr) }}</a>
              @endforeach
            </div>
          </div>
          
          <div class="expand-block " data-point-parent="">
            <div class="expand-block__title">
              <span>{{ __('messages.tvsystem') }}</span>
              <div data-point-link="">
                <x-arrow-expand></x-arrow-expand>
              </div>
            </div>

            <div class="expand-block__body" data-point-hide-panel="expand-panel">
              @foreach ([
              'ts_descr' => 'description',
              'tvsystem' => 'components',
              'lenses' => 'lenses',
              'tower' => 'tower',
              'ts_models' => 'ts_models',
              'net' => 'net',
              'interactive_map' => 'interactive_map',
            ] as $sLink => $sTr)
              <a class="_no-underline" href="{{route($sLink)}}">{{ __('messages.' . $sTr) }}</a>
            @endforeach
              <a class="_no-underline" href="{{route('services')}}#protection">{{ __('messages.protection') }}</a>
            </div>
          </div>
          
          <div class="expand-block " data-point-parent="">
            <div class="expand-block__title">
              <span>{{ __('messages.services') }}</span>
              <div data-point-link="">
                <x-arrow-expand></x-arrow-expand>
              </div>
            </div>

            <div class="expand-block__body" data-point-hide-panel="expand-panel">
              <a class="_no-underline" href="{{route('services')}}">{{ __('messages.support') }}</a>
              <a class="_no-underline" href="{{route('services')}}#protection">{{ __('messages.protection') }}</a>
              <a class="_no-underline" href="{{route('services')}}#tower_old">{{ __('messages.tower_old') }}</a>
              <a class="_no-underline" href="{{route('services')}}#walkie_talkie">{{ __('messages.walkie_talkie') }}</a>
            </div>
          </div>
         
          <div class="expand-block " data-point-parent="">
            <div class="expand-block__title">
              <span>{{ __('messages.projects') }}</span>
              <div data-point-link="">
                <x-arrow-expand></x-arrow-expand>
              </div>
            </div>

            <div class="expand-block__body" data-point-hide-panel="expand-panel">
              @foreach ([
              'photo_traps' => 'photo_traps',
              'control_sawmill' => 'subordinate'
            ] as $sLink => $sTr)
              <a class="_no-underline" href="{{route($sLink)}}">{{ __('messages.' . $sTr) }}</a>
            @endforeach
            </div>
          </div>
          
        </div>
        
      </div>
      
      <span class="footer__body-item all_rights">{{ __('messages.text_footer_all_rights') }}</span>

    </div>

  </div>
</footer>
