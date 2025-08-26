@extends('layouts.app')


@section('content')


<div class="ts-components">
  <h1>Телесистема мониторинга</br>
       лесного массива</h1>
    
  <div class="squares _article">
    {{-- row 1 --}}
    <x-row>

      {{-- parameters --}}
      <div class="main-parameters">
        <div>Основные компоненты и параметры системы</div>
        <x-params-list>
          <x-params-item sName="РАСХОД ЭНЕРГИИ">100Вт</x-params-item>
          <x-params-item sName="ТЕХОБСЛУЖИВАНИЕ">ежегодное</x-params-item>
          <x-params-item sName="СРОК СЛУЖБЫ">7 лет</x-params-item>
        </x-params-list>
      </div>

      {{-- CAMERA --}}
      <x-square-bg iId="tvcamera" sClass='popup_click' sImgName="camera">
        <span>{{ __('messages.list_item_camera') }}</span>
      </x-square-bg>

      {{-- TURNER --}}
      <x-square-bg iId="turner" sClass='popup_click' sImgName="rotary_device">
        <span>{{ __('messages.list_item_rotary_device') }}</span>
      </x-square-bg>
    </x-row>

    {{-- row 2 --}}
    <x-row sClass="square-row-top square-row-left">

      {{-- DATA TRANSFER SYSTEM --}}
      <x-square-bg iId="data-transfer" sClass='popup_click' sImgName="data_transfer">
        <span>{{ __('messages.list_item_data_transfer') }}</span>
      </x-square-bg>

      {{-- TOWER --}}
      <x-square-bg iId="tower" sClass='popup_click' sImgName="tower">
        <span>{{ __('messages.list_item_tower') }}</span>
      </x-square-bg>

    </x-row>

    {{-- row 3 --}}
    <x-row sClass="square-row-top">

      {{-- OFFICE DEVICE --}}
      <x-square-bg iId="office-device" sClass='popup_click' sImgName="office_device">
        <span>{{ __('messages.list_item_office_device') }}</span>
      </x-square-bg>

      {{-- SOFTWARE --}}
      <x-square-bg iId="software" sClass='popup_click' sImgName="software">
        <span>{{ __('messages.list_item_software') }}</span>
      </x-square-bg>

      {{-- GPS --}}
      <x-square-bg iId="gps" sClass='popup_click' sImgName="gps">
        <span>{{ __('messages.list_item_gps') }}</span>
      </x-square-bg>

    </x-row>

    {{-- row 4 --}}
    <x-row sClass="square-row-top square-row-left">

      {{-- FEATURES --}}
      <x-square-bg iId="features" sClass='popup_click' sImgName="additional_features">
        <span>{{ __('messages.list_item_additional_features') }}</span>
      </x-square-bg>

      {{-- SECURITY --}}
      <x-square-bg iId="security" sClass='popup_click' sImgName="security">
        <span>{{ __('messages.list_item_security') }}</span>
      </x-square-bg>

    </x-row>
  </div>

</div>

{{-- popup --}}

{{-- CAMERA popup --}}
<x-popup-details sTitle="{{ __('messages.list_item_camera') }}" iId='tvcamera_popup' sClass="print_popup print_popup_visible" :aFooter="['sBtnMainName' => __('messages.text_read_more'), 'sBtnMainLink' => 'lenses']" >
  
  {{-- row 1 --}}
  <x-row>
    <x-item>
      <p>Телекамера - наиважнейшая часть телесистемы, состоит из объектива и защитного корпуса. Именно телекамера определяет чистоту, четкость изображения и дальность осмотра леса, обеспечивает</p>
      <h3 class="_color-accent" >детальное качественное изображение при максимальном увеличении</h3>
    </x-item>
    
    <x-item>
      <p> <b>Модельный ряд</b> телесистем позволяют проектировать работу системы наблюдения с учетом индивидуальных особенностей каждого хозяйства:ландшафт, бюджет, потребности.</br>
      <a href="{{ route('ts_models') }}" class="text_read_more">{{__('messages.text_read_more')}}</a></p>
    </x-item>
  </x-row>
  
  {{-- row 2 --}}
  
  <x-row>
    <x-item sClass="popup-ts-components__camera-items">
      <div>
        <h5 class='photo-traps__gist'>Корпус</h5>
        <p>Корпус защищает объектив от внешних воздействий.<br/>
          Водостойкий, выдерживает морозы, покраска надежно защищает от коррозии.</p>
      </div>
      
      <div>
        <x-img-platform>
           <img src="{{ asset('img/tv_system/lenses/gallary/gl_1.jpg')}}" width="70%" height="auto" alt="" loading='lazy'/> 
         </x-img-platform>    
      </div>
    </x-item>
    
    <x-item sClass="popup-ts-components__camera-items">
      <div>
        <h5>Объектив</h5>
        <p>Телекамеры ВПК базируются только на
        <span class='_color-accent'>качественных японских объективах</span></p>
      </div>
      
      <div>
        <x-img-platform>
          <img src="{{ asset('img/tv_system/lenses/gallary/gl_2.jpg')}}"  width="70%" height="auto" alt="" loading='lazy'/>
        </x-img-platform>    
      </div>
    </x-item>
  </x-row>


  {{-- row 3 --}}
  <x-row>
    <x-item>
      <div class="attantion-frame">{{ __('messages.text_take_your_attantion') }}</div>
      <ul class="first-letter">
        <li>Бытовые охранные телесистемы не соответствуют требованиям систем наблюдения за лесом.</li>
        <li>Китайские производители не имеют технологий для изготовления объективов уровня японских.</li>
      </ul>   
    </x-item>
    
    <x-item>
      <x-compare_lenses></x-compare_lenses>
    </x-item>
  </x-row>
  
</x-popup-details>

{{-- TURNER popup --}}
<x-popup-details sTitle="{{ __('messages.list_item_rotary_device') }}" iId='turner_popup'  sClass="print_popup print_popup_visible" >
  <x-row>
    
    <x-item>
      <div>
        <p>Телекамера монтируется на поворотное устройство, которое обеспечивает плавное и беспрерывное движение камеры.</p>
        <p>Телесистемы используют поворотное устройство только производства ВПК. Все модели маркированы. Логотип расположен на корпусе устройства.</p>
      </div>
      <x-img-platform>
        <img src="{{ asset('img/tv_system/rotary_device/model_1.png')}}" width="260px" height="auto"  alt="alt" loading="lazy"/>
      </x-img-platform>
    </x-item>
    
    <x-item>
      <x-params-list>
        <x-params-item sName="комплектация">новый асинхронный двигатель и редуктор</x-params-item>
        <x-params-item sName="поворот на 360 градусов">исключает слепые зоны и проблемы с движимой частью жгута кабелей</x-params-item>
        <x-params-item sName="люфт">минимальный</x-params-item>
        <x-params-item sName="Рабочий режим движения">круговое беспрерывное и бесконечное движение</x-params-item>
        <x-params-item sName="плавность движения">без остановок, с одинаковой скоростью</x-params-item>
      </x-params-list>
    </x-item>
    
  </x-row>
</x-popup-details>

{{-- DATA TRANSFER SYSTEM popup --}}
<x-popup-details sTitle="{{ __('messages.list_item_data_transfer') }}" iId='data-transfer_popup'  sClass="print_popup print_popup_visible" >
  <x-row>
    
    <x-item-column>
      <p>Данные на пункт наблюдения передаються посредством <span class="_color-accent">радиоканалов, кабелей или интернета.</span></p>
      <p>Оператор пункта наблюдения имеет возможность управлять положением камеры, установить обзор в нужном направлении, увеличить картинку.</p>
      <p>Управление обеспечивается оборудованием на каждой вышке и офисным оборудованием, программным обеспечением.</p>
      
      <x-img-platform>
        <img src="{{ asset('img/tv_system/tv_system_forest.jpg')}}" width="100%"  height="auto" alt="alt" loading="lazy"/>
      </x-img-platform>
      
    </x-item-column>
    
    <x-item-column>
      <h5>Локальный компьютер</h5>
      <p>Установленный на вышке локальный компьютер обеспечивает работу камеры и поворотного устройста.</p>
      
      <x-params-list>
        <x-params-item sName="Param 1 ">description param 1</x-params-item>
        <x-params-item sName="Param 1 ">description param 1</x-params-item>
      </x-params-list>
      
      <x-img-platform>
        <img src="{{ asset('img/tv_system/ts_computer.jpg')}}" width="100%" height="auto" alt="alt" loading="lazy"/>
      </x-img-platform>

    </x-item-column>
    
  </x-row>
</x-popup-details>

{{-- TOWER popup --}}
<x-popup-details sTitle="{{ __('messages.list_item_tower') }}" iId='tower_popup'  sClass="print_popup print_popup_visible"  :aFooter="['sBtnMainName' => __('messages.text_read_more'), 'sBtnMainLink' => 'tower']">
  <x-row sClass="popup_tower">
    
    <x-item-no-padding sClass='tower-popup-bg'>
      <div></div>
      <div class="tower-popup-bg__header">
        <h3>Легкосплавная вышка собственной разработки</br>
          <span class="_color-accent">ВПК-48</span></h3>
      </div>
    </x-item-no-padding>
    
    <x-item>
      <p>Трехгранная металлоконструкция вышек, имея очень высокий запас прочности, выдерживает разрушенние двух вертикальных стоек из трех. </p>
      <p>Конструкция прошла самый верный тест - военными действиями.</p>

      <x-params-list>
        <x-params-item sName="Высота">48-50 м</x-params-item>
        <x-params-item sName="Материал">Легкий металлический сплав</x-params-item>
        <x-params-item sName="Рабочая температура">-50 до +50 градусів С</x-params-item>
      </x-params-list>      
    </x-item>
  </x-row>

</x-popup-details>

{{-- OFFICE DEVICE popup --}}
<x-popup-details sTitle="{{ __('messages.list_item_office_device') }}" iId='office-device_popup'  sClass="print_popup print_popup_visible" >
  <x-row>
    
    <x-item>
      <p>Прием данных и их качественная обработка не менее важная часть в системе</p>
      <p>Каждый пункт наблюдения оснащается необходимым оборудованием, лицензионным и специализированным программным обеспечением.</p>
      <p>Конфигурации оборудования могут быть различными в зависимости от заявленного бюджета, пожеланий операторов, но достаточным для  стабильной работы и качественной обработки данных.</p>
     
      <div>
        <h5>Монитор</h5>
        <p>Мощные японские объективы работают в паре с соответствующего качества мониторами - четкость и цветопередача обеспечивают детальное рассмотрение изображения, даже  <span class="_color">маленький дымок</span> на большом расстоянии.</p>
        <x-params-list>
          <x-params-item sName="Система">full HD</x-params-item>
          <x-params-item sName="Разрешение">1920Х1080</x-params-item>
        </x-params-list>
      </div>
    </x-item>
    
    <x-item>
      <div>
        <h5>Компьютер</h5>
        <p>Конфигурация оборудования обеспечивает бесперебойную работу специализированного программного обеспечения.</p>
      </div>
      
      <div>
        <h5>Пульт управленеия</h5>
        <p>Рабочее состояние камеры - беспрерывное равномерное движение. Но иногда нужно просмотреть отдельный учаток леса, более внимательно, детально. Пульт управления камерами позволяет:</p>
        
        <ul class="first-letter">
         <li>Останавливать движение</li>
         <li>Поворачивать в нужном направлении</li>
         <li>Возобновлять рабочий режим</li>
        </ul>
        
        <picture class='_article'>
            <source 
                media="(max-width: 480px)"
                srcset="{{ asset('img/tv_system/user_console_mobile.png')}}">

            <source 
                media="(max-width: 1280px)"
                srcset="{{ asset('img/tv_system/user_console.png')}}">

            <img 
                src="{{ asset('img/tv_system/user_console.png')}}" 
                alt="Пульт управленеия камерами"
                width="300px" height="auto" alt="" loading='lazy'>
        </picture>
      </div>
    </x-item>
    
  </x-row>
</x-popup-details>

{{-- SOFTWARE popup --}}
<x-popup-details sTitle="{{ __('messages.list_item_software') }}" iId='software_popup'  sClass="print_popup print_popup_visible"  :aFooter="['sBtnMainName' => __('messages.text_read_more'), 'sBtnMainLink' => 'interactive_map']">
  <x-row>
    <x-item>
      <div>
        <h5>Электронная карта</h5>
        <p>Динамическая электронная карта демонстрирует в реальном времени положение всех телекамер и направлений их обозрения. Отображает
        <span class='_color-accent'>зоны обзора телекамер | движение автомобилей и работников</span>
        </p>
        <p></p>
      </div>

      <x-img-platform>
        <img src="{{ asset('img/tv_system/monitore_map_areas.png')}}" width="300px"  height="auto"alt="alt" loading="lazy"/>
      </x-img-platform>
      
    </x-item>
    
    <x-item>
      
      <div>
        <h5>Управление камерами</h5>
        <p>Включает запись в электронный журнал <span class='_color-accent'>видео с камер | информацию о пожаре</span></p>
     
      </div>

      <div>
        <h5>Оповещение</h5>
        <p>При обнаружении возгорания программа автоматически оповещает причасных лиц и руководство о 
          <span class='_color-accent'>месте и времени возникнвения пожара | ходе его тушения</span></p>
        <p>В разработке программного обеспечения были учтены специфика работы в лесной отрасли и пожелания операторов пункта наблюдения.</p>
      </div>
      
    </x-item>
  </x-row>
</x-popup-details>

{{-- GPS popup --}}
<x-popup-details sTitle="{{ __('messages.list_item_gps') }}" iId='gps_popup'  sClass="print_popup print_popup_visible" >
  <x-row>
    
    <x-item-column>
      <div>
        <h5>Оборудование</h5>
        <p>Производством ВПК был разработан gps трекер позволяющий водителям пожарных машин пользоваться навигационной системой, которая прокладывает <span class="_color">оптимальный маршрут</span> движения <span class="_color">от местоположения автомобиля и до места пожара</span>.</p>
      </div>
  
      <picture class='_article'>
          <source 
              media="(max-width: 480px)"
              srcset="{{ asset('img/tv_system/gps/gps_mobile.png')}}">

          <source 
              media="(max-width: 1280px)"
              srcset="{{ asset('img/tv_system/gps/gps.png')}}">

          <img 
              src="{{ asset('img/tv_system/gps/gps.png')}}" 
              alt="GPS навигатор производства ВПК"
              width="300px" height="auto" alt="" loading='lazy'>
      </picture>

        
    </x-item-column>
    
    <x-item-column>
      <h5>Программное обеспечение</h5>
      <p>Лесным хозяйством составляются карты лесных дорог.</br>
        Таким образом, маршрут движения составляется по <span class="_color">обычными</span> и 
        <span class="_color">лесными дорогами</span>
      </p>
      <p>В процесс разработки телесистем ВПК включается также и внесение в навигационную карту недостающих лесных дорог.</p>
      <img src="{{ asset('img/tv_system/gps/program.png')}}" width="80%" height="auto" alt="alt" loading="lazy"/>

    </x-item-column>
    
  </x-row>
</x-popup-details>

{{-- FEATURES popup --}}

<x-popup-details sTitle="{{ __('messages.list_item_additional_features') }}" iId='features_popup'  sClass="print_popup print_popup_visible" >
  <x-features></x-features>
</x-popup-details>

{{-- SECURITY popup --}}

<x-popup-details sTitle="{{ __('messages.list_item_security') }}" iId='security_popup'  sClass="print_popup print_popup_visible"  :aFooter="['sBtnMainName' => __('messages.text_read_more'), 'sBtnMainLink' => 'ts_protection']">
  <x-row>
    
    <x-item>
      <p>Для полного и качественного обзора всей территории леса хозяйства создается сеть телесистем ВПК. </p>
      <p>Использование информации внутри сети возможно лишь сотрудникам с различными уровнями доступа.</p>
      <h3>Под надежной защитой >>></h3>
    </x-item>
    
    <x-item-center>
      <x-accents-list>
        <x-accents-item>данные видеокамер</x-accents-item>
        <x-accents-item>электронная почта</x-accents-item>
        <x-accents-item>бухгалтерские документы</x-accents-item>
        <x-accents-item>видеозаписи электронных журналов</x-accents-item>
        
        <x-accents-item>другие данные</x-accents-item>
      </x-accents-list>
    </x-item-center>
    
  </x-row>

</x-popup-details>

@endsection
