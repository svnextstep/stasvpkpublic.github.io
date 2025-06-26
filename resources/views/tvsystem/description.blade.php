@extends('layouts.app')


@section('content')

<div class="presentation tv-system-top">
  <div class="slider" data-legend-parent>
    
    <div class="slider__content ts-brief"  data-legend-watch>
      <div class="ts-brief__item">
        <h3>ОПЕРАТИВНОЕ ОБНАРУЖЕНИЕ ПОЖАРОВ</h3>
        <p>Уникальная в Украине телесистема производства ВПК обеспечивает высокое качество изображения и возможность значительного оптического увеличения.</p>
      </div>
      
      <div class="ts-brief__item">
        <h3>ВЫСОКАЯ ТОЧНОСТЬ КООРДИНАТ ОЧАГА ВОЗГОРАНИЯ</h3>
        <p>Пересечение зон наблюдения двух телекамер дают точные координаты. Сеть телесистем ВПК обеспечивает покрытие всей области наблюдения.</p>
      </div>
      
    </div>
    
    {{-- legend --}}
    <div class="slider__legend legend" data-legend>
      <div class="legend__item"></div>
      <div class="legend__item"></div>
    </div>

  </div>
</div>

<h1>{{ __('messages.ts.title_page_description') }}!</h1>

<section>

  <x-row>

    <x-item>
      <p>{{ __('messages.ts.text_ts_preamble_locate_fire') }}</p>
      <div>
        <div class="take-attantion _accent">{!! __('messages.ts.title_ts_preamble_ts_name') !!}</div>
        <p>{!! __('messages.ts.text_ts_preamble_ts_ability') !!}</p>
      </div>
      <p>{{ __('messages.ts.text_ts_preamble_cooperation_with_foresters') }}</p> 
    </x-item>

    <x-item>

      <div class='wildfire'>
        <div>{{ __('messages.ts.title_fire_inevitable') }}! {!! __('messages.ts.text_fire_detect') !!}</div>
        <div>{!! __('messages.ts.text_fire_consequences') !!}</div>

        <div class="wildfire__photos">
          <div class="photo-album">
            @for ($i = 1; $i < 6; $i++)
              <img class='album-item-{{ $i }} _anim-items _anim-no-hide' src="{{asset('/img/tv_system/fire/img' . $i . '.jpg')}}" width="125" height="100" alt="" loading='lazy'/>
            @endfor
          </div>
          <div class="yellow-line"></div>

        </div>      
      </div>

    </x-item>
  </x-row>
  
</section>


 <section>
  {{-- how it works --}}
  <h2>{{ __('messages.ts.title_how_it_works') }}</h2>
  <div class="how-it-works _anim-items _anim-no-hide">
    <x-row sClass="howitworks">
      
      <x-item-no-padding sClass="howitworks__demo">
        <div class="demo-screen">

          {{-- camera/tower design --}}
          <div class="howitworks__slide1">
            <x-svg-howitworks-lens></x-svg-howitworks-lens>
            <x-svg-howitworks-camera></x-svg-howitworks-camera>
            <x-svg-howitworks-tower></x-svg-howitworks-tower>
            <x-svg-howitworks-turner></x-svg-howitworks-turner>
            
            <div class="demo-title svg-lens-title">Объектив</div>
            <div class="demo-title svg-camera-title">Корпус</div>
            <div class="demo-title svg-tower-title">Вышка</div>
            <div class="demo-title svg-turner-title">Поворотное устройство</div>
          </div>

          {{-- camera works --}}
          <div class="howitworks__slide2">
            <div class="net-work">
                <div class="net-work__canvas">
                  <x-svg_howitworks_step2></x-svg_howitworks_step2>
                  <svg class="transfer-svg" width="800" height="800" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMinYMin meet">
                    <path id="howitworks-net-camera1" d="M 115,155 L 330,250"></path>
                    <g>
                      <circle cx="0" cy="0" r="3"></circle>
                      <animateMotion dur="3s" repeatCount="indefinite" fill="freeze"> 
                         <mpath xlink:href="#howitworks-net-camera1"></mpath>
                      </animateMotion> 
                    </g>
                  </svg>

                  <svg class="transfer-svg" width="800" height="800" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMinYMin meet">
                    <path id="howitworks-net-camera2" d="M 330,100 L 330,250"></path>
                    <g>
                      <circle cx="0" cy="0" r="3"></circle>
                      <animateMotion dur="3s" repeatCount="indefinite" fill="freeze"> 
                         <mpath xlink:href="#howitworks-net-camera2"></mpath>
                      </animateMotion> 
                    </g>
                  </svg>
                </div>

                <div class="net-work__transition transition">
                  @foreach (['top', 'middle', 'bottom', 'footer'] as $sTransitionItem)
                    <div class="transition__{{$sTransitionItem}}">
                      @for ($i=1; $i <= 4; $i++)
                        <div class="transition__cell item-{{$i}}"></div>
                      @endfor
                    </div>    
                  @endforeach

                </div>
            </div>
          </div>
        </div>
        
        
        <div class="howitworks__desciptions">
          {{-- camera tower design --}}
          <div id="howitworks_slide1_descr" class='desciptions-item'>
            Телекамера крепиться на поворотное устройсто, которое устанавливается на наивысшую точку вышки.
          </div>

          {{-- camera works --}}
          <div id="howitworks_slide2_descr" class='desciptions-item'>
            Поворотное устройство медленно поворачивает камеру на 360 градусов, осматривая лесной массив площадью 30-60 км.
          </div>

          {{-- net --}}
          <div id="howitworks_slide3_descr" class="desciptions-item">
            Компьютерное моделирование создает сеть телекамер. Данные с телекамер передаются на пункты наблюдения.
          </div>

          {{-- office --}}
          <div id="howitworks_slide4_descr" class="desciptions-item">
            Оператор анализирует информацию. При обнаружении дыма сигнализирует и передает инфорацию службам пожарного реагирования:
            <ul class="first-letter">
              <li>координаты местоположения возгорания</li>
              <li>кратчайший маршрут следования</li>
            </ul>
          </div>

        </div>
      </x-item-no-padding>
      

      
    </x-row>

    
  </div>
</section>

{{-- unique --}}
<section>
  <h2>{{ __('messages.ts.title_what_is_unique') }}</h2>
  <x-row>
    <x-item>
      <div>
        <p>{{ __('messages.ts.text_what_is_unique_lenses_summary') }}</p>
        <p>{!! __('messages.ts.text_what_is_unique_follow_formula') !!}:</p>
      </div>
      
      <div class="formula">

        <div class="formula__item">
          <h3>{{ __('messages.ts.text_japanese_lens') }}</h3>
          <p>{!! __('messages.ts.text_japanese_lens_params') !!}</p>
        </div>

        <div class="formula__math">
          <h3>+</h3>
        </div>

        <div class="formula__item">
          <h3>{{ __('messages.ts.text_american_matrix') }}</h3>
          <p>{!! __('messages.ts.text_american_matrix_params') !!}</p>
        </div>

      </div>
      
      <div><p>{!! __('messages.ts.text_what_is_unique_system_summary', ['url_lenses' => route('lenses'), 'url_tvsystem' => route('tvsystem')]) !!}</p></div>
   
    </x-item>
    
    <x-item>
      <h3 class="_mt30">{{ __('messages.title_advantages') }}</h3>
      <ul class="list--dotted appear-right">
        <li class='_anim-items _anim-no-hide'>{{ __('messages.ts.text_advantages_1') }}</li>
        <li class='_anim-items _anim-no-hide'>{!! __('messages.ts.text_advantages_2', ['url_map' => route('interactive_map')]) !!}</li>
        <li class='_anim-items _anim-no-hide'>{{ __('messages.ts.text_advantages_3') }}</li>
        <li class='_anim-items _anim-no-hide'>{!! __('messages.ts.text_advantages_4', ['url_net' => route('net')]) !!}</li>
        <li class='_anim-items _anim-no-hide'>{!! __('messages.ts.text_advantages_5', ['url_protection' => route('ts_protection')]) !!}</li>
        <li class='_anim-items _anim-no-hide'>{{ __('messages.ts.text_advantages_6') }}</li>
      </ul>

      <div class="attantion-frame">
        Предостерегаем о подделках! <div id='wrong_ts' class="text_read_more popup_click">{{__('messages.text_read_more')}}</div>
      </div>

    </x-item>
  </x-row>
</section>



<section>
  {{-- DESIGN --}}
  <h2>{{ __('messages.ts.title_system_design') }}</h2>
  
  <x-row>
    <x-item>
      {!! __('messages.ts.text_system_design') !!}
    </x-item>
    
    <x-item>
      <ul class="first-letter">
        <li>{{ __('messages.ts.text_main_directions_full_coverage_area') }}</li>
        <li>{{ __('messages.ts.text_main_directions_exact_coordinates_fire') }}</li>
        <li>{{ __('messages.ts.text_main_directions_fast_fire_response') }}</li>
        <li>{{ __('messages.ts.text_main_directions_ease_use') }}</li>
      </ul>
    </x-item>
  </x-row>
  
  
</section>

<section>
  
  <div class="project-steps">
    <div class="project-steps__row">
      
      <h3>{{ __('messages.ts.title_project_stages') }}</h3>
      
      @foreach (['analyze','design','install','support','prevention'] as $sName)
        <div class="project-steps__item step appear-panel__link" id="step-{{$sName}}">
          <div class="step__body">
            <div class="step__number">{{ $loop->index + 1 }}</div>
            <div class="step__title open-popup__link2">{{ __('messages.ts.title_project_stages_' . $sName) }} @if($sName !== "support") ...@endif
            </div>
          </div>
        </div>
      @endforeach
      
      <x-anim-panel iId="step-analyze" sTitle="{{ __('messages.ts.title_project_stages_analyze') }}" sSlogan="все детали важны">
        <p>Никто так хорошо не знает свое хозяйство как лесники и потому особое внимание уделяем их пожеланиям.</p>
        <p>Вместе анализируем особенности и нюансы лесного хозяйства.</p>
        <p>Детально изучаем карты лесного хозяйства, ландшафта.</p>
        <p>Анализируем возможности использования уже существующего оборудования. Например, старые вышки с дальнейшим их наращиванием при необходимости.</p>
      </x-anim-panel>

      <x-anim-panel iId="step-design" sTitle="{{ __('messages.ts.title_project_stages_design') }}" sSlogan="без слепых зон">
        <p>Предприятие ВПК имеет в своем распоряжении <span class="_color-accent">карту рельефа Украины от NASA с учетом высоты леса</span>.
        Расположение вышек с телекамерами планируется с использованием карт ландшафта местности хозяйства.
        Для контроля всей зоны хозяйства разрабатывается сеть телесистем.</p>
        <h5>Разработка конфигурации телесистем</h5>
        <p>ВПК разработало различные модификации телесистем для конкретных задач. Сеть может включать комбинации из этих телесистем.</p>
        <p>Например, в некоторых случая дальность осмотра может обеспечить менее дорогая телесистема.</p>
      </x-anim-panel>

      <x-anim-panel iId="step-install" sTitle="{{ __('messages.ts.title_project_stages_install') }}" sSlogan="быстро и качественно">
        <h5>Установка телекамер</h5>
        <p>Монтаж телекамер, средств передачи данных на вышках. Модульная конструкция вышек ВПК позволяет провести их быстрый монтаж.</p>

        <h5>Оборудование пункта наблюдения</h5>
        <p>Установка и надалка специализированного оборудования и программного обеспечения. Создание или дополнение цифровой карты лесных дорог. Установка навигационного оборудования.</p>

        <h5>Наладка — четкость работы</h5>
        <p>Проверка работы системы управлнеия камерами, электронной карты, электронного журнала видеоматериалов. Тестирование средств оповещения служб при обнаружении возгорания.</p>
      </x-anim-panel>
      
      <x-anim-panel iId="step-support" sTitle="{{ __('messages.support') }}" sSlogan="в любое время">
        <x-support></x-support>
      </x-anim-panel>
      
      <x-anim-panel iId="step-prevention" sTitle="{{ __('messages.ts.title_project_stages_prevention') }}" sSlogan="лес уважает предусмотрительных">
        <p>Профилактические действия важны для бесперебойной работы системы особенно в жаркую пору. Этот процесс занимает некоторое время и потому его необходимо проводить в период, когда риски пожара снижаются.</p>
        <h5>Профилактика включает</h5>
        <ul class="list--dotted">
          <li>Очищение защитного стекла телекамер, чистка оптических механизмов</li>      
          <li>Чистка, смазка поворотного устройства</li>
          <li>Замена изношенных деталей</li>
          <li>Электропрогон</li>
          <li>Проверка состояния растяжек вышек</li>
        </ul>
        <div class="attantion-frame">Профилактика должна проходить в период <b>НЕ&nbsp;пожароопасный</b>.</div>
      </x-anim-panel>
    </div>

    

  </div>
</section>

<section>
  <h2>Почему именно мы?</h2>
  
  <x-row>
    <x-item-center>
      <p>Коллектив компании наряду с лесниками считает себя ответственным за сохранения леса. Сама философия компании предполагает качественное выполнение своей части работы. И этому способствует</p>
      
    </x-item-center>
    
    <x-item>
      <ul class="first-letter">
        <li>Многолетний опыт</li>      
        <li>Знания нюансов лесных хозяйств</li>
        <li>Использование новых технологий</li>
      </ul>
    </x-item>
  </x-row>
</section>


{{-- WRONG TS popup --}}
<x-popup-details sTitle="Предостерегаем о подделках" iId='wrong_ts_popup'  sClass="print_popup wrong-cameras" >
  
  <x-row>
    
    <x-item>
      <p>К сожалению, нередки случаи продажи некачественных систем под видом профессиоальных или аппататуры запрещенной законом Украины. </p>
      <p>А иногда просто перепродают оборудование запрещенного в Украине производителя, выдавая за украиниское производство.</p>
       </x-item>
    
    <x-item>
      <p>Если у Вас возникают заруднения в выборе телесистемы или сомнения в ее качестве, Вы всегда можете <a href="{{ route('contacts') }}">обратиться к нам  за консультацией</a>. Будем рады Вам помочь.</p>
   
    </x-item>
    
  </x-row>
  
  <div class="_article">
    <h3 class="_center">Телекамеры не рекомендованные для наблюдения за лесным массивом.</h3>
      
    <div class="wrong-cameras__img-list">
      <img  src="{{asset('/img/tv_system/wrong_cameras/wally.png')}}" width="15%" height="auto" alt="" loading='lazy'/>
      <img src="{{asset('/img/tv_system/wrong_cameras/wrong2.png')}}" width="35%" height="auto" alt="" loading='lazy'/>
      <img src="{{asset('/img/tv_system/wrong_cameras/wrong4.png')}}" width="15%" height="auto" alt="" loading='lazy'/>
    </div>
  </div>
    
    

</x-popup-details>


@endsection
