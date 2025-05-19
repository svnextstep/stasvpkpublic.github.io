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