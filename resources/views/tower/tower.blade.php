@extends('layouts.app')


@section('content')

<div class="presentation tower">
  <div class="presentation__title">
    <div>Легкосплавная</div>
    <div class="presentation__title-accent">вышка</div>
    <div class="presentation__title-second-info">собственной разработки</div>
  </div>
</div>

{{-- TOP PANEL - name and main info --}}
<div class="presentation__card">
  
  <div class="bright_slogan_design">Минимальный вес при максимальной прочности</div>
  
  <div class="presentation__card-title">TOWER <span class="_color-accent">ВПК-48</span></div>

  <x-accents-list>
    <x-accents-item>прочные материалы</x-accents-item>
    <x-accents-item>инженерные решения</x-accents-item>
    <x-accents-item>качественный монтаж</x-accents-item>
  </x-accents-list>


  <div class="attantion-frame">Протестировано войной - выдерживает разрушенние двух вертикальных стоек из трех.</div>
    
</div>

<x-gallery-wrapper>
  {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{ asset('img/tower/slide_tower_full_view.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <h5>Основные параметры</h5>
      <p>Вышка - это дополнительная часть системы видеонаблюдения за лесом.</p> 
      <p>Ее конструкция включает необходимые параметры для качественной работы телесистемы.</p>
      
      <x-params-list>
        <x-params-item sName="Высота вышки">48-50м</x-params-item>
        <x-params-item sName="Материал">Легкий металлический сплав</x-params-item>
      </x-params-list> 

    </x-gallery-item-desc>
    
    <x-gallery-item-desc>
       <a href="#elm_tower_link2params" id="tower_link2params" class="text_read_more relative_link">{{__('messages.text_read_more')}}</a>
    </x-gallery-item-desc>
   
  </x-gallery-item>

  {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{ asset('img/tower/slide_tower_design_base.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <h5>Конструкция</h5>
      <p>Схема конструкции вышки - секционная трехгранная решетчастая с узлами в местах пересечения элементов решетки и веток.</p>
      
      <x-params-list>
        <x-params-item sName="Размер основы секции">650х650х650 мм</x-params-item>
        <x-params-item sName="Высота">3м</x-params-item>
        <x-params-item sName="Количество">14, усиленных - 2</x-params-item>
      </x-params-list>

    </x-gallery-item-desc>
  </x-gallery-item>
  
  {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{asset('/img/tower/slide_tower_design_guywires.jpg')}}"  width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <h5>Устойчивость</h5>
      <p>Вышка крепится тросами (hawser) с трех сторон. Схема крепления тросов расчитана с запасом прочности.</p>
      <p>Как показала практика (обстрелы в период войны) вышка стабильна даже при потере нескольких тросов. </p>
      <p>Проверка состояния растяжек вышки включена в техническое обслуживание.</p>
      
      <x-params-list>
        <x-params-item sName="Количество ярусов стяжек">8</x-params-item>
      </x-params-list>
      
    </x-gallery-item-desc>
  </x-gallery-item>

  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{asset('/img/tower/slide_tower_installation.jpg')}}"  width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <h5>Монтаж</h5>
      <p>Модульное устройство вышек позволяет их быстрый монтаж.</p>
      <p>Эти работы выполняются квалифицированным персоналом, иначе возможно разрушение вышек и как следствие потеря установленного на нем  дорогостоящего оборудования.</p>
    </x-gallery-item-desc>
    
  </x-gallery-item>

  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{asset('/img/tower/slide_tower_in_war.jpg')}}"  width="300" height="auto"  alt="Tower in war" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <h5>{{__('messages.title_trial_by_war')}}</h5>
      <p>Несмотря на значительные повреждения при обстрелах, вышки производства ВПК выстояли, сохранив дорогостоящее оборудование.</p>
      <x-params-list>
        <x-params-item sName="Продолжала работу при:">
          <div>Разрыве пояса в двух местах.</div>
          <div>Потере на одной стороне 7 тросов из 8ми.</div>
        </x-params-item>
      </x-params-list>
    </x-gallery-item-desc>
    
    <x-gallery-item-desc>
      <a href="{{ route('tower_war') }}" class="text_read_more">{{__('messages.text_read_more')}}</a>
    </x-gallery-item-desc>
    
  </x-gallery-item>

  {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{asset('/img/tower/slide_tower_design.jpg')}}"  width="300" height="auto"  alt="Tower design" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <h5>Техническое обслуживание</h5>
      <p>Необходимо не менее раза в год обязательно проверять состояние растяжек вышки и своевременно перетягивать их.</p>
      <p>Эти работы должны выполняться только квалифицированным ПЕРСОНАЛОМ, в противном случае возможно разрушение вышек и соответственно потеря дорогостоящего оборудования.</p>
    </x-gallery-item-desc>
  </x-gallery-item>
  
</x-gallery-wrapper>


      
{{-- PARAMETERS FULL LIST --}}
<section id='elm_tower_link2params'>
  <h2>Параметры вышки</h2>
  <div class="tower-params">
    
    <div class="params__list frame-accent">
        
        @foreach($aParams as $sKeyName => $aParam)
        
        <div class="params__item param">
          <div class="param__header">
            {{ __('messages.' . $sKeyName . '_title') }}
          </div>
          <div class="param__data">
            @isset($aParam['var'])
              {{ $aParam['var'] }}
              @isset($aParam['unit']) {{  __('messages.' . $aParam['unit']) }} @endisset
              @isset($aParam['comment']) {{ $aParam['comment'] }} @endisset
            @else
              {{ __('messages.' . $sKeyName . '_val') }}
            @endisset
          </div>
        </div>
        
        @if ($loop->index == 4 || $loop->index == 9)
    </div>
    <div class="params__list frame-accent">
        @endif
        
        @endforeach
        
        <div class="line__horizontal-medium"></div>
        <p class="article"><span class="_color-accent">*</span> {{ __('messages.tower-param_comment-1') }}</p>
   
    </div>
    
  </div>
  
</section>


{{-- OLD TOWERS RECONSTRUCTION reconstruction of old towers --}}
<section>
  <h2>Реконструкция старых вышек</h2>
  <div class="panel__row">
    <div class="panel__item _article-flex">
      <p>Старые вышки так же могут быть использованы в проектировании "СИСТЕМЫ НАБЛЮДЕНИЯ ЗА ЛЕСОМ". 
        Если их высоты достаточно, то производиться только ремонт и покраска вышки. Если нет, то расчитывается необходимая дополнительная высота. Затем реставрируется старая и наращивается легкосплавная вышка ВПК.</p>
      <p>Итак, проект предусматривает модернизацию старых вышек:</p>
      
      <x-accents-list>
        <x-accents-item>ремонт</x-accents-item>
        <x-accents-item>покраска</x-accents-item>
        <x-accents-item>наращивание вышек на 12-16м</x-accents-item>
      </x-accents-list>


      <p>Ремонт и покраска старой вышки может быть и отдельным заказом. А так же других высотных конструкций.
        <a href="{{ route('services') }}" class="text_read_more">{{__('messages.text_read_more')}}</a>
      </p>
      
    </div>
    
    <div class="panel__item">
      <div class="img-group__row">
        <div class="img-group__item">
          <img src="{{ asset('img/tower/old_tower/before.jpg') }}" width="300" height="auto" alt="Tower view" loading="lazy"/>
        </div>
        
        <div class="img-group__item overlapped_img">
          <img src="{{ asset('img/tower/old_tower/after.jpg') }}" width="300" height="auto" alt="Tower view" loading="lazy"/>
        </div>
      </div>
    </div>
    
  </div>
</section>
@endsection