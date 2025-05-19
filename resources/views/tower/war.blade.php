@extends('layouts.app')


@section('content')

<h1>{{__('messages.title_trial_by_war')}}</h1>

<x-row>
  
  <x-item>
    
    <p>Военные действия в Украине стали серьезным испытанием на прочность. К сожалению, некоторые регионы с установленными системами ВПК были подвергнуты обстрелам.</p>
    <p>Были нанесены серьезные повреждения вышкам, но несмотря на это, их обрушение не произошло.</p>
    <div class="take-attantion">Металлоконструкция вышки производства ВПК имеет <span class="_color-accent">большой запас прочности</span> благодаря</div>
    <ul class="list--dotted">
      <li>Удачным инженерным решениям</li>
      <li>Прочным материалам</li>
      <li>Качественному монтажу</li>
    </ul>
    <p>Наиболее важным является <span class="_color">сохранение дорогостоящего оборудования</span> установленного на вышке. А кроме того, нет необходимости демонтировать всю <a href="{{ route('tower') }}">вышку</a>. Благодаря ее модульности, можно лишь <span class="_color">заменить разрушенные секции</span>.</p>

  </x-item>
  
  <x-item sClass='tower-in-war'></x-item>
  
</x-row>

 <h2>Последствия обстрелов</h2>
 
<x-gallery-wrapper>
  
    {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{ asset('img/tower/war_img2.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Разрыв пояса на высоте 0,55м</p> 
    </x-gallery-item-desc>
  </x-gallery-item>
    
    {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{ asset('img/tower/war_img3.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Разрыв пояса на высоте 25м</p>
    </x-gallery-item-desc>
  </x-gallery-item>
    
    {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{ asset('img/tower/war_img4.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Разрыв тросов. Остался один трос из 8ми.</p> 
    </x-gallery-item-desc>
  </x-gallery-item>
    
    {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{ asset('img/tower/war_img5.jpg') }}" width="300" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <p>Разрыв тросов. Разрыв пояса.</p> 
    </x-gallery-item-desc>
  </x-gallery-item>
</x-gallery-wrapper>


@endsection
