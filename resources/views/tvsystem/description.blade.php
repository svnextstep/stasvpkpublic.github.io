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
          <div class="howitworks__slide2"></div>

          <div class="howitworks__slide3"></div>

          <div class="howitworks__slide4"></div>
          
          <div class="demo-screen--clearing"></div>
        </div>
      </x-item-no-padding>
      
      <x-item sClass="howitworks__desciptions">
        <div id="howitworks_slide1_descr"><p>Телекамера (объектив защищенный металлическим кожухом) крепиться на поворотное устройсто, которое устанавливается на наивысшую точку вышки (высотой до 48м).</p></div>
        <div id="howitworks_slide2_descr"><p>Также на вышку монтируются и сопутствующее оборудование - антена, устройство управления телекамерой, средства коммуникации. Поворотное устройство медленно поворачивает камеру <span class="_color"> на 360 градусов</span>, осматривая лесной массив <span class="_color">  площадью 30-60 км </span> в зависимости от рельефа.</p></div>
      </x-item>
      
    </x-row>

    
  </div>
</section>




<section>
  {{-- how it works --}}
  <h2>{{ __('messages.ts.title_how_it_works') }}</h2>
  <div class="how-it-works _anim-items _anim-no-hide">
    <div class="howitworks demo-sliders">
      <x-row>
        
        <x-item-no-padding>
          {{-- camera/tower design --}}
          <div id="howitworks_slide1" class="demo-sliders__item _active">
            <x-svg-howitworks-lens></x-svg-howitworks-lens>
            <x-svg-howitworks-camera></x-svg-howitworks-camera>
            <x-svg-howitworks-tower></x-svg-howitworks-tower>
            <x-svg-howitworks-turner></x-svg-howitworks-turner>
            
            <div class="demo-title svg-lens-title">Объектив</div>
            <div class="demo-title svg-camera-title">Корпус</div>
            <div class="demo-title svg-tower-title">Вышка</div>
            <div class="demo-title svg-turner-title">Поворотное устройство</div>
          
          </div>
          <div id="howitworks_slide2"  class="demo-sliders__item">demo 2</div>
          <div id="howitworks_slide3"  class="demo-sliders__item">demo 3</div>
          <div id="howitworks_slide4"  class="demo-sliders__item">demo 4</div>
          
          <div class="clear-screen">
            <x-row sClass="shatter clear-screen__row1">
              <x-item></x-item>
              <x-item sClass="clear-screen__item-right"></x-item>
            </x-row>
            <hr class="clear-screen__line"/>
            <x-row sClass="clear-screen__row2">
              <x-item></x-item>
              <x-item sClass="clear-screen__item-right"></x-item>
            </x-row>
            <x-row sClass="clear-screen__row3">
              <x-item></x-item>
              <x-item sClass="clear-screen__item-right"></x-item>
            </x-row>
            <x-row sClass="clear-screen__row4">
              <x-item></x-item>
              <x-item sClass="clear-screen__item-right"></x-item>
            </x-row>
          </div>
        </x-item-no-padding>
        
        
        <x-item>
          {{-- camera tower design --}}
          <div id="howitworks_slide1_descr" class="demo-sliders__item-descr">
            <p>Телекамера (объектив защищенный металлическим кожухом) крепиться на поворотное устройсто, которое устанавливается на наивысшую точку вышки (высотой до 48м).</p>
          </div>
          
          {{-- camera works --}}
          <div id="howitworks_slide2_descr" class="demo-sliders__item-descr">
            <p>Также на вышку монтируются и сопутствующее оборудование - антена, устройство управления телекамерой, средства коммуникации. Поворотное устройство медленно поворачивает камеру <span class="_color"> на 360 градусов</span>, осматривая лесной массив <span class="_color">  площадью 30-60 км </span> в зависимости от рельефа.</p>
          </div>
          
          {{-- net --}}
          <div id="howitworks_slide3_descr" class="demo-sliders__item-descr">
            <p class="_justify">Компьютерное моделирование создает сеть телекамер, решая задачу мониторинга ВСЕГО лесного массива предприятия (лесхоза). Данные с телекамер передаются на пункты наблюдения.</p>
          </div>
          
          {{-- office --}}
          <div id="howitworks_slide4_descr" class="demo-sliders__item-descr">
            <p class="_justify">Оператор анализирует информацию. При обнаружении дыма сигнализирует и система определяет координаты местоположения возгорания, кратчайший маршрут следования и передает инфорацию службам пожарного реагирования.</p>
          </div>
        </x-item>
        
      </x-row>
    </div>
    
    <div class="how-it-works__legend"></div>
  </div>
  
</section>


<section>
  {{-- how it works --}}
  
  <div class="how-it-works">
    
    <div class="how-it-works__content">
      
      {{-- camera tower design --}}
      <x-row sClass="_active">
        
        <x-item sClass="how-it-works__demo">
          <x-svg-howitworks-lens></x-svg-howitworks-lens>
          <x-svg-howitworks-camera></x-svg-howitworks-camera>
          <x-svg-howitworks-turner></x-svg-howitworks-turner>
          <x-svg-howitworks-tower></x-svg-howitworks-tower>
          
          <div class="lens-title _active">Объектив</div>
          <div class="camera-title _active">Корпус</div>
          <div class="tower-title _active">Вышка</div>
          <div class="turner-title _active">Поворотное устройство</div>
        </x-item>
        
        <x-item sClass="how-it-works__description _active">
          <div class="number_as_bg">01</div>
          <p>Телекамера (объектив защищенный металлическим кожухом) крепиться на поворотное устройсто, которое устанавливается на наивысшую точку вышки (высотой до 48м).</p>
        </x-item>
        
      </x-row>
      
      {{-- camera works --}}
      <x-row>
        <x-item sClass="how-it-works__demo">demo</x-item>
        <x-item sClass="how-it-works__description">
          <div class="number_as_bg">02</div>
          <p>Также на вышку монтируются и сопутствующее оборудование - антена, устройство управления телекамерой, средства коммуникации. Поворотное устройство медленно поворачивает камеру <span class="_color"> на 360 градусов</span>, осматривая лесной массив <span class="_color">  площадью 30-60 км </span> в зависимости от рельефа.</p>
        </x-item>
      </x-row>
      
      {{-- net --}}
      <x-row>
        <x-item sClass="how-it-works__demo">demo</x-item>
        <x-item sClass="how-it-works__description">
          <div class="number_as_bg">03</div>
          <p class="_justify">Компьютерное моделирование создает сеть телекамер, решая задачу мониторинга ВСЕГО лесного массива предприятия (лесхоза). Данные с телекамер передаются на пункты наблюдения.</p>
        </x-item>
      </x-row>
      
      {{-- office --}}
      <x-row>
        <x-item sClass="how-it-works__demo">demo</x-item>
        <x-item sClass="how-it-works__description">
          <div class="number_as_bg">04</div>
          <p class="_justify">Оператор анализирует информацию. При обнаружении дыма сигнализирует и система определяет координаты местоположения возгорания, кратчайший маршрут следования и передает инфорацию службам пожарного реагирования.</p>
        </x-item>
      </x-row>
      
    </div>
    
    

    
    <div class="how-it-works__legend legend">
      @for ($i = 1; $i <= 4; $i++ )
      <div class="legend__item"></div>
      @endfor
    </div>
    
  </div>
</section>












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
      <ul class="list--dotted">
        <li>{{ __('messages.ts.text_advantages_1') }}</li>
        <li>{!! __('messages.ts.text_advantages_2', ['url_map' => route('interactive_map')]) !!}</li>
        <li>{{ __('messages.ts.text_advantages_3') }}</li>
        <li>{!! __('messages.ts.text_advantages_4', ['url_net' => route('net')]) !!}</li>
        <li>{!! __('messages.ts.text_advantages_5', ['url_protection' => route('ts_protection')]) !!}</li>
        <li>{{ __('messages.ts.text_advantages_6') }}</li>
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
<x-popup-details sTitle="Предостерегаем о подделках" iId='wrong_ts_popup'  sClass="print_popup" >
  
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
      
    <div class="grid-3">
      <x-img-platform>
        <img src="{{asset('/img/tv_system/wrong_cameras/wally.png')}}" width="20%" height="auto" alt="" loading='lazy'/>
      </x-img-platform>
      <x-img-platform>
        <img src="{{asset('/img/tv_system/wrong_cameras/wrong2.png')}}" width="45%" height="auto" alt="" loading='lazy'/>
      </x-img-platform>
      <x-img-platform>
        <img src="{{asset('/img/tv_system/wrong_cameras/wrong4.png')}}" width="20%" height="auto" alt="" loading='lazy'/>
      </x-img-platform>
      
    </div>
  </div>
    
    

</x-popup-details>


@endsection
