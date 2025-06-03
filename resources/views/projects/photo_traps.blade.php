@extends('layouts.app')


@section('content')

<h1>{{ __('messages.photo_traps') }}</h1>

<x-row>
  
  <x-item sClass="change-order">
    <p class="photo-traps__gist">Фотоловушки предназначены для скрытой сьемки событий. Они маскируются под ствол дерева на лесных тропах и дорогах.</p>
    
    <div>
      <div class="take-attantion">
        Сеть фотоловушек производства ВПК разрабатывается специально для конкретного лесного хозяйства
      </div>

      <p>Фотоловушки объединяются в сеть, которую можно подключить к глобальной сети ВПК наблюдения за лесным массивом. Таким образом операторы пункта наблюдения будут иметь полную информацию о состоянии хозяйства вцелом.</p>

      <h5>Возможности сети фотоловушек</h5>

      <ul class="list--dotted">
        <li>Видеозапись происшествий в зоне наблюдения начинается за 5 секунд до нарушения</li>
        <li>Передача по радиоканалу на пост наблюдения зафиксированных данных</li>
        <li>Возможность монтажа на близком или дальнем расстоянии от зоны наблюдения</li>
        <li>Удобная и понятная дистанционная настройка</li>
        <li>Возможность подключения смартфона и стационарного компьютера</li>
      </ul>      
    </div>

  </x-item>
  
  <x-item sClass='photo-traps'>
    <div>
      <img class="photo-traps__img" src="{{asset('/img/projects/photo_traps.png')}}" width='300' height="auto" alt="photo traps" loading="lazy"/>

     <x-params-list sClass='photo-traps__params' sLineAccent='hide'>
       <h3 class='photo-traps__title'>ВПК-120</h3>
       <x-params-item sName="Фото">12 мегапикселов</x-params-item>
       <x-params-item sName="Видео">Full HD 1920x1080</x-params-item>
       <x-params-item sName="48 часов">беспрерывной работы при полной зарядке встроенного аккамулятора</x-params-item>
       <x-params-item sName="Оповещение">на пост наблюдения при нарушении зоны наблюдения</x-params-item>
     </x-params-list>
    </div>
    
  </x-item>
  
</x-row>

<section>
  <h2>Область применения</h2>
  
  <x-accents-list>
    <x-accents-item>контроль за лесными дорогами</x-accents-item>
    <x-accents-item>контроль за чистотой леса</x-accents-item>
    <x-accents-item>наблюдение за поведением животных</x-accents-item>
  </x-accents-list>
    
    
  <div class="photo-album falling-cards">
    <img class="album-item-1 _anim-items _anim-no-hide" src="{{asset('/img/projects/auto.jpg')}}" width='250' height="250" alt="" loading="lazy"/>
    <img class="album-item-2 _anim-items _anim-no-hide" src="{{asset('/img/projects/construction_waste.jpg')}}" width='250' height="250" alt="" loading="lazy"/>

    <img class="album-item-3 _anim-items _anim-no-hide" src="{{asset('/img/projects/animals.jpg')}}" width='250' height="250" alt="" loading="lazy"/>
    <img class="album-item-4 _anim-items _anim-no-hide" src="{{asset('/img/projects/animals3.jpg')}}" width='250' height="250" alt="" loading="lazy"/>
    
    <img class="album-item-5 _anim-items _anim-no-hide" src="{{asset('/img/projects/animals4.jpg')}}" width='250' height="250" alt="" loading="lazy"/>
    
    <img class='album-item-6 _anim-items _anim-no-hide' src="{{asset('/img/projects/animals2.jpg')}}" width='250' height="250" alt="" loading="lazy"/>
  </div>
  <div class="yellow-line"></div>
</section>


@endsection
