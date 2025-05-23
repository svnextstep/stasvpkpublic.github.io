@extends('layouts.app')


@section('content')
<div class="lenses-top-img">
  <img src="{{ asset('/img/tv_system/lenses/lens_top.png') }}" width="480" height="auto" alt="telesystem lense" loading="lazy" />
</div>

<div>

  <h1>{{__('messages.lenses')}} </h1>

  <x-row>
    <x-item>
      <div class="take-attantion">
          Специализированные 
          <span class="_color-accent">Телесистемы наблюдения</span> 
        за 
        <span class="_color-accent">Лесом</span> производства 
        <span class="_color-accent">ВПК</span> базируются только на 
      </div>
      <h3 class="_color-accent">качественных <br /> японских объективах</h3>



      <h5>Cпецзаказ</h5>
      <p class="_justify">Японскими инженерами были изготовлены объективы для <a href="{{ route('ts_descr') }}">телесистем ВПК</a> по спецзаказу нашего производства с учетом специфики наблюдения за лесом и требований лесников.</p>

      <h5>Бытовые или специализированные?</h5>
      <p class="_justify">Объективы для бытовых камер способны качественно мониторить двор, морской порт. Но на больших площадях они бесполезны. </p>
      <p><a href="#" id="which_lens" class="text_read_more relative_link">{{__('messages.text_read_more')}}</a></p>

    </x-item>

    <x-item-center sClass="flex-self-end">
      <div class="frame-accent--bordered">
        <x-params-list>
          <x-params-item sName="цветопередача">
            <i>Характеристика: диаметр</i>
            <p>Чем больше диаметр линзы, тем больше света попадает в нее, что дает возможность получить значительно четче и ярче изображение. Даже на большом расстоянии можно различить оттенки цветов и увидеть небольшой дым.</p>
          </x-params-item>

          <x-params-item sName="оптическое увеличение">
            <i>Характеристика: фокусное расстояние</i>.
            <p>Этот параметр указывает на возможность значительного увеличения изображения исключающее муар</p>
          </x-params-item>
        </x-params-list> 
      </div>
    </x-item-center>
  </x-row>

</div>

{{-- TABS body --}}
<x-tabs-list :aTabItems="['Model 1', 'Model 2', 'Model 3']">
  @foreach ($aLenses as $iId => $aModel)
    @php $sActive = ($loop->index == 0) ? '_active' : '' @endphp
    
    <x-tabs-content-item sClass="lenses-tab__content lenses-tab__{{$iId}}  {{$sActive}}" >
      <x-lenses-focus></x-lenses-focus>
      
      <x-params-list sClass='_active'>
        
        @foreach ($aModel['params'] as $sParamName => $aParam)
          <x-params-item sName="{{ __('messages.' . $sParamName) }}">{{$aParam['value']}} {{  __('messages.' . $aParam['unit']) }}</x-params-item>
        @endforeach
        
        <x-params-item sName="используются в телесистемах">
          <h3 class="_color-accent">{{ __('messages.text_vpk_name') . " " . $aModel['used_in'] }}</h3>
        </x-params-item>
        
      </x-params-list> 
      
    </x-tabs-content-item>
  @endforeach
  
</x-tabs-list>

{{-- PARAMETERS --}}
<section>
  <h2 iId="elm_which_lens">Бытовые или специализированные?</h2>
  
  <div class="panel__row">
    
    <div class="panel__item _article">
      <p>Бытовые телесистемы базируются на недорогих объективах китайского производства. Их качества вполне достаточно для наблюдения за малыми площадями. Но лесные массивы - это огромные расстояния и для детального осмотра каждого участка леса нужны</p>
      <div class="take-attantion"><span class="_color-accent">специализированные</span> системы способные <span class="_color">значительно увеличивать изображение без потери качества</span> картинки.</div>
    </div>

    <div class="panel__item _article">
      <x-compare_lenses></x-compare_lenses>
    </div>
    
  </div>
</section>

<section>
  <div class="panel__row">
    
    <div class="panel__item">
      <img class='compare-lens' src="{{ asset("img/tv_system/lenses/compare_lens.jpg") }}" width="600" height="auto" alt="" loading="lazy" />
    </div>

    <div class="panel__item _article">
      <x-expand-block sTitle="Диаметр">
        <p>Чем больше диаметр, тем лучше качество изображения. На больших площадях важен каждый миллиметр диаметра объектива. Его можно измерять даже линейкой.</p>
      </x-expand-block>

      <x-expand-block sTitle="Фокусное расстояние">
        <p>Возможность оптического увеличения. Чем больше значение параметра, тем дальше видит объектив. На качественных объективах указывают минимальное (Fmiп) и максимальное (Fmах) фокусное расстояние.</p>
      </x-expand-block>

      <x-expand-block sTitle="Производитель">
        <p>На данный момент объективы высокого качества выпускаются <span class="_color">японскими компаниями</span>. Китайские производители, к сожалению, не имеют технологий изготовления больших объективов.</p>
      </x-expand-block>
      
    </div>
    
  </div>  
</section>

<div>
  <h2>О чем говорят эти характеристики на практике?</h2>
  
  {{-- AGRUMENT 1 --}}
  <x-row>
    
    <x-item-center>
      <p>Лесной массив можно осматривать любыми системами, вопрос в результате этого осмотра. Возможно ли рассмотреть возгорание на нечетком изображении, где все объекты и цвета сливаются в единое неразборчивое пятно?</p>
      <p>Выбор очевиден и он в пользу <span class="_color-accent">специализированных телесистем ВПК</span>.</p>

    </x-item-center>
    
    <x-item sClass='forest-view'>
      <div class='forest-view__bg'></div>
      
      <div class='forest-view__compare-img-list'>
        <x-item-no-padding>
          <img src="{{ asset('/img/tv_system/lenses/compare_high.jpg') }}" width="240" height="auto" alt="" loading='lazy'/>
          <p><b>телесистемы ВПК</b></p>
        </x-item-no-padding>

        <x-item-no-padding>
          <img src="{{ asset('/img/tv_system/lenses/compare_low.jpg') }}"  width="240" height="auto" alt="" loading='lazy'/>
          <p><b>бытовые системы</b></p>
        </x-item-no-padding>
      </div>
    </x-item>
    
  </x-row>
  
  {{-- AGRUMENT 2 --}}
  <x-row sClass='lenses-compare'>
    <x-item>
      
      <x-row>
        {{-- cameras 1 --}}
        <x-item-no-padding sClass='lenses-compare__net-chema net-chema'>
          <div class="_forest_net">
            <div class="camera-pair__row"></div>
            <div class="camera-pair__row"></div>
          </div>
          <div class="net-chema__title">Сеть профессиональных специализированных телесистемы ВПК</div>
        </x-item-no-padding>
        
        {{-- cameras 1 --}}
        <x-item-no-padding sClass='lenses-compare__net-chema net-chema'>
          <div class="_forest_net">
            <div class="camera-pair__row"></div>
            <div class="camera-pair__row"></div>
          </div>
          <div class="net-chema__title">Сеть телесистем бытового назначения</div>
        </x-item-no-padding>
      </x-row>
      
      <x-row sClass='lenses-compare__net-params'>
        
        <x-item-no-padding sClass='lenses-compare__net-params-title'>Эффективная дальность осмотра</x-item-no-padding>
        <x-item-no-padding>
          <x-row>
            <x-item-no-padding>30 км и дальше</x-item-no-padding>
            <x-item-no-padding>до 10 км</x-item-no-padding>
          </x-row>
        </x-item-no-padding>
        
        <x-item-no-padding sClass='lenses-compare__net-params-title'>Количество телекамер</x-item-no-padding>
        <x-item-no-padding>
          <x-row>
            <x-item-no-padding>7</x-item-no-padding>
            <x-item-no-padding>15</x-item-no-padding>
          </x-row>
        </x-item-no-padding>
        
        <x-item-no-padding sClass='lenses-compare__net-params-title'>Количество рабочих мест</x-item-no-padding>
        <x-item-no-padding>
          <x-row>
            <x-item-no-padding>2</x-item-no-padding>
            <x-item-no-padding>4</x-item-no-padding>
          </x-row>
        </x-item-no-padding>
      </x-row>
      
    </x-item>
    
    <x-item-center>
        <p>Собственно является логическим продолжением первого аргумента - количество телекамер, которые нужно установить для полного контроля над всей площадью леса. 
        Чем дальше видит объектив тем</p>
        <ul class="first-letter">
          <li>меньшее количество телесистем нужно устанавливать</li>
          <li>меньше затрат на обслуживание оборудования, в том числе и профилактических действий</li>
          <li>меньше операторов на пунктах наблюдения, как утверждают специалисты один человек может эффективно контролировать лес на изображениях 4х камер</li>
        </ul>
    </x-item-center>
  </x-row>
    
</div>

<x-gallery-wrapper>
  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{ asset('img/tv_system/lenses/gallary/gl_1.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Объектив в защитном корпусе на поворотном устройстве</p>
    </x-gallery-item-desc>
    
  </x-gallery-item>

  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{ asset('img/tv_system/lenses/gallary/gl_2.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Объектив изготовленный японскими инженерами по специальному заказу производства ВПК</p>
    </x-gallery-item-desc>
    
  </x-gallery-item>
  
  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{ asset('img/tv_system/lenses/gallary/gl_3.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>На корпусе фирменного объектива указана модель и маркировка</p>
    </x-gallery-item-desc>
    
  </x-gallery-item>
  
  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{ asset('img/tv_system/lenses/gallary/gl_4.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Основные параметры объектива: максимальное и минимальное фокусное расстояние</p>
    </x-gallery-item-desc>
    
  </x-gallery-item>
  
  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{ asset('img/tv_system/lenses/gallary/gl_5.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Внешний вид Модели 1</p>
    </x-gallery-item-desc>
    
  </x-gallery-item>
  
  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{ asset('img/tv_system/lenses/gallary/gl_6.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Внешний вид Модели 2</p>
    </x-gallery-item-desc>
    
  </x-gallery-item>
  
  {{-- ITEM --}}
  <x-gallery-item>
    
    <x-gallery-item-img>
      <img src="{{ asset('img/tv_system/lenses/gallary/gl_7.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Вид сверху Модель 1, Модель 2, Модель 3</p>
    </x-gallery-item-desc>
    
  </x-gallery-item>
</x-gallery-wrapper>

@endsection
