@extends('layouts.app')


@section('content')

<div class="presentation map-card">
  <div class="presentation__img">
    <picture class='screen-map'>
        <source 
            media="(max-width: 480px)"
            srcset="{{ asset('img/tv_system/monitore_map_fire_small.png')}}">

        <source 
            media="(max-width: 1280px)"
            srcset="{{ asset('img/tv_system/monitore_map_fire.png')}}">

        <img 
            src="{{ asset('img/tv_system/monitore_map_fire.png')}}" 
            alt="Интерактивная карта наблюдения за лесом"
            width="300px" height="auto" alt="" loading='lazy'>
    </picture>
    <picture class='screen-view'>
        <source 
            media="(max-width: 480px)"
            srcset="{{ asset('img/tv_system/monitore_small.png')}}">

        <source 
            media="(max-width: 1280px)"
            srcset="{{ asset('img/tv_system/monitore.png')}}">

        <img 
            src="{{ asset('img/tv_system/monitore.png')}}" 
            alt="Интерактивная карта наблюдения за лесом"
            width="300px" height="auto" alt="" loading='lazy'>
    </picture>

  </div>
  
  <div class="presentation__title">
    <div>Interactive</div>
    <div class="presentation__title-accent">Map</div>
    <div class="presentation__title-second-info">собственной разработки</div>
  </div>
</div>

{{-- TOP PANEL - name aand main info --}}
<div class="presentation__card">
  
  <div class="bright_slogan_design">реальные события в реальном времени</div>
  
  <x-expand-line></x-expand-line>
  
  <div class="presentation__card-title">
    Демонстрация Работы всех Телекамер </br><span class="_color-accent">в Реальном Времени</span>
  </div>

  <div>Карта отображает:</div>
  
  <x-accents-list>
    <x-accents-item>зоны обзора телекамер</x-accents-item>
    <x-accents-item>места возгораний</x-accents-item>
    <x-accents-item>движение автомобилей и работников</x-accents-item>
  </x-accents-list>
  
</div>

{{-- MAP DEMONSTRATION --}}

<x-row>
  
  <x-item sClass='map-descr'>
    
    {{-- size --}}
    <x-expand-block sTitle="Масштабировние">
      <ul class="list--dotted">
        <li>Уменьшать для полного обзора работы всех камер.</li>
        <li>Увеличивать для более детального рассмотрения секций.</li>
        <li>Прокручивать по горизонтали и вертикали.</li>
      </ul>
    </x-expand-block>
    
    {{-- manage --}}
    <x-expand-block sTitle="Управление камерами">
      <p>Камеру можно повернуть в нужном направлении при необходимости более внимательно просмотреть определенный участок.</p>
      <p>Увеличить изображение лесного массива, чтобы посмотреть детально. Конфигурация телесистемы позволяет обнаружить даже <span class="_color-accent">небольшой дымок на большом расстоянии</span>.</p>
    </x-expand-block>

    {{-- find fire --}}
    <x-expand-block sTitle="Определение очага возгорания">
      <p>Пересечение лучей двух камер дают точные координаты. Программа автоматически определяет эти координаты и оповещает лесников. </p>
    </x-expand-block>
        
  </x-item>
  
  {{-- DEMO BLOCK --}}
  <x-item>
    <div class="block_demo">
      <div class="interactive-map">
        <div class="interactive-map__screen">
          
          {{-- map --}}
          <div class="interactive-map__bg forest-map">
            
            {{-- RAYLIGHT AREAS --}}
            
            <div class='camera-watch__pair'>
               {{-- FIRE --}}
              <div class="fire-art">
               <x-fire-svg></x-fire-svg>
             </div>

              {{-- LINES  --}}
              <div class="fire-point-y"></div>
              <div class="fire-point-x"></div>

              <x-camera-watch sBlockAddClass="_migrate-left fire_camera_1" iId="fire_camera_1"></x-camera-watch>
              <x-camera-watch sBlockAddClass="_migrate-right fire_camera_2" iId="fire_camera_2"></x-camera-watch>
            </div>
            
            <div class='camera-watch__pair'>
              <x-camera-watch sBlockAddClass="_migrate-left"  iId="handle_camera"></x-camera-watch>
              <x-camera-watch sBlockAddClass="_migrate-right"></x-camera-watch>
           </div>
            
            <x-camera-watch-pair></x-camera-watch-pair>
            
          </div>
          
          <div class="review-forest">
            <img class="review-forest__smoke" src="{{asset('/img/tv_system/smoke.png')}}" width="50" height="auto" alt="" loading="lazy" />
            <svg class="review-forest__accent" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="25px" y="25px"
               xml:space="preserve">
              <circle cx="40" cy="40" r="35"/>
            </svg>
          </div>
          
          {{-- tools --}}
          <div class="_tools">
            <div>interactive map program demonstration</div>
            <button class="btn-tool" id="ts_map_show">Show</button>
            <button class="btn-tool _hide" id="ts_map_show_again">{{ __('messages.btn_show_again') }}</button>
          </div>
          
        </div>
      </div>
    </div>
    
    
  </x-item>
  
</x-row>



{{-- MAP FUNCTIONS --}}

<section>
  <x-row sClass='_article'>
    <x-item-column sClass='align-items--center frame-accent--bordered'>
      <h4 class="_center">запись в электронный журнал</h4>
      <img class="album-item-1 _anim-items _anim-no-hide" src="{{asset('/img/tv_system/map_record.jpg')}}" width='250' height="250" alt="" loading="lazy"/>
    </x-item-column>
    
    <x-item-column sClass='align-items--center frame-accent--bordered'>
      <h4 class="_center">автоматическое оповещение о пожаре операторов</h4>
      <img class="album-item-2 _anim-items _anim-no-hide" src="{{asset('/img/tv_system/map_fire_warning.jpg')}}" width='250' height="250" alt="" loading="lazy"/>
    </x-item-column>

    <x-item-column sClass='align-items--center frame-accent--bordered'>
      <h4 class="_center">оповещение руководителя</h4>
      <img class="album-item-3 _anim-items _anim-no-hide" src="{{asset('/img/tv_system/map_fire_warning_office.jpg')}}" width='250' height="250" alt="" loading="lazy"/>
    </x-item-column>
  </x-row>
  <p></p>
</section>

@endsection
