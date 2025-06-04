@extends('layouts.app')


@section('content')
<div class="presentation tower">

    <div class="presentation__card">
      <div>Легкосплавная</div>
      <div class="presentation__card-accent">вышка</div>
      <div class="presentation__card-second-info">собственной разработки</div>
    </div>

  
</div>

 <h1>Welcome</h1>
 
 
 





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


 <p class="test-mixin"><a href="/">The text which</a>The text which has a lot of wishes</p>
      <p class="add-text">Test mixin file includes</p>

      <div class="gallery">
        <div class="gallery__wrapper">
          <div class="gallery__arrow _arrow-inactive">
            <div class="arrow-cycle--left"></div>
          </div>
          
          <div class="gallery__list">
            <div class="gallery__list-inner">
              <div class="gallery__item gallery-detail">
                <div class="gallery-detail__img">
                  <img src="{{ asset('img/tower/slide_tower_full_view.jpg') }}" width="300" height="auto" alt="Tower view" loading="lazy"/>
                </div>
                <div class="gallery-detail__description">
                  <h5>Основные параметры</h5>
                  <p>Вышка - это дополнительная часть системы видеонаблюдения за лесом.</p> 
                  <p>Ее конструкция включает необходимые параметры для качественной работы телесистемы.</p>
                  <div class="params__list">
                    <div class="line__horizontal-medium"></div>

                    <div class="params__item param">
                      <div class="param__header">Высота вышки</div>
                      <div class="param__data">48-50м</div>
                    </div>

                    <div class="params__item param">
                      <div class="param__header">Материал</div>
                      <div class="param__data">Легкий металлический сплав</div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="gallery__item gallery-detail">
                <div class="gallery-detail__img">
                  <img src="{{ asset('img/tower/slide_tower_design_base.jpg') }}" width="300" height="auto" alt="Tower design base" loading="lazy"/>
                </div>
                <div class="gallery-detail__description">
                  <h5>Конструкция</h5>
                  <p>Схема конструкции вышки - секционная трехгранная решетчастая с узлами в местах пересечения элементов решетки и веток.</p>
                  <div class="params__list">
                    <div class="line__horizontal-medium"></div>

                    <div class="params__item param">
                      <div class="param__header">Размер основы секции</div>
                      <div class="param__data">650х650х650 мм</div>
                    </div>

                    <div class="params__item param">
                      <div class="param__header">Высота</div>
                      <div class="param__data">3м</div>
                    </div>

                    <div class="params__item param">
                      <div class="param__header">Количество</div>
                      <div class="param__data"> 
                        14, усиленных - 2
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="gallery__item gallery-detail">
                <div class="gallery-detail__img">
                  <img src="{{ asset('img/tower/slide_tower_design_guywires.jpg') }}" width="300" height="auto" alt="Tower design guywires" loading="lazy"/>
                </div>
                <div class="gallery-detail__description">
                  <h5>Устойчивость</h5>
                  <p>Вышка крепится тросами (hawser) с трех сторон. Схема крепления тросов расчитана с запасом прочности.</p>
                  <p>Как показала практика (обстрелы в период войны) вышка стабильна даже при потере нескольких тросов. </p>
                  <p>Проверка состояния растяжек вышки включена в техническое обслуживание.</p>

                  <div class="params__list">
                    <div class="line__horizontal-medium"></div>

                    <div class="params__item param">
                      <div class="param__header">Количество ярусов стяжек</div>
                      <div class="param__data">8</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="gallery__item gallery-detail">
                <div class="gallery-detail__img">
                  <img src="{{ asset('img/tower/slide_tower_installation.jpg') }}" width="300" height="auto" alt="Tower installation" loading="lazy"/>
                </div>
                <div class="gallery-detail__description">
                  <h5>Монтаж</h5>
                  <p>Модульное устройство вышек позволяет их быстрый монтаж.</p>
                  <p>Эти работы выполняются квалифицированным персоналом, иначе возможно разрушение вышек и как следствие потеря установленного на нем  дорогостоящего оборудования.</p>
                </div>
              </div>

              <div class="gallery__item gallery-detail">
                <div class="gallery-detail__img">
                  <img src="{{ asset('img/tower/slide_tower_in_war.jpg') }}" width="300" height="auto" alt="Tower in war" loading="lazy"/>
                </div>
                <div class="gallery-detail__description">
                  <h5>{{__('messages.title_trial_by_war')}}</h5>
                  <p>Несмотря на значительные повреждения при обстрелах, вышки производства ВПК выстояли, сохранив дорогостоящее оборудование.</p>

                  <div class="params__list">
                    <div class="line__horizontal-medium"></div>

                    <div class="params__item param">
                      <div class="param__header">Продолжала работу при:</div>
                      <div class="param__data div_first-letter">Разрыве пояса в двух местах</div>
                      <div class="param__data div_first-letter">Потере на одной стороне 7 тросов из 8ми </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="gallery__item gallery-detail">
                <div class="gallery-detail__img">
                  <img src="{{ asset('img/tower/slide_tower_design.jpg') }}" width="300" height="auto" alt="Tower design" loading="lazy"/>
                </div>
                <div class="gallery-detail__description">
                  <h5>Техническое обслуживание</h5>
                  <p>Необходимо не менее раза в год обязательно проверять состояние растяжек вышки и своевременно перетягивать их.</p>
                  <p>Эти работы должны выполняться только квалифицированным ПЕРСОНАЛОМ, в противном случае возможно разрушение вышек и соответственно потеря дорогостоящего оборудования.</p>
                </div>
              </div>              
            </div>
            
          </div>
          
          <div class="gallery__arrow">
            <div class="arrow-cycle--right"></div>
          </div>
        </div>
      </div>
      
      
  
@endsection