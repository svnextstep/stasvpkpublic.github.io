@extends('layouts.app')


@section('content')
  <h1>
    {{ __('messages.title_services') }}
  </h1>

{{-- service --}}
<section class="_article">
  <div class="panel__row _frame support">
      
    <div class="panel__item">
      <h3>{{ __('messages.support') }}</h3>
      <img class="_top-line-accent" src="{{asset('/img/service/support.png')}}" width="485" height="auto" alt="" loading="lazy"/>
    </div>

    <div class="panel__item">
      <x-support></x-support>
    </div>

  </div>
</section>

{{-- protection --}}
<section class="_article" id='protection'>
  <div class="panel__row _frame protection">
    
    <div class="panel__item _article">
      <h3>{{ __('messages.title_system_protection') }}</h3>
      <div class="take-attantion">
        Сеть телесистем производства ВПК </br> <span class="_color-accent">не допускает утечки </span> </br>
        информации.
            </div>

      <div >
        <h5>Данные в сети доступны лишь работникам имеющим доступ к сети</h5>
        <p>При <a href="{{ route('net')}}">расширении или объединении сетей</a> разработаны различные уровни доступа. Например, лесхоз может использовать информацию со всех камер подведомственных ему лесничеств.</p>
        <p> Но каждое лесничество может использовать только свою локальную систему или специально подключенные к ее сети камеры соседнего лесничества.</p>


        <h5>Техноголии ВПК способны защитить любые компьютерные системы и приспособления</h5>
        
      </div>
      
      <p class='attantion-frame'>
        Защита сетей внедряется в соответствии с рекомендациями протокола №17 заседания колегии Гослесагенства 
      </p>
    </div>
    
    
  </div>
</section>

{{-- OLD TOWERS RECONSTRUCTION reconstruction of old towers --}}

<section class="_article">
  <div class="panel__row _frame support">
      
    <div class="panel__item">
      <h3>Restoration of old structures</h3>
      <div class="restoration-old-tower__row _top-line-accent">

        <div class="restoration-old-tower__item">
          <img src="{{ asset('img/tower/old_tower/overhead-cranes.jpg') }}" width="100%" alt="alt"/>
          <img src="{{ asset('img/tower/old_tower/old_tower.jpg') }}" width="100%" alt="alt"/>
        </div>

        <div class="restoration-old-tower__item">
          <img width="100%" src="{{ asset('img/tower/old_tower/renew_tower.jpg') }}" alt="alt"/>
        </div>

      </div>
    </div>

    <div class="panel__item">
      <div>
        <h5>Покраска</h5>
        <p>Профессиональная качественная покраска высотных сооружений в лесном хозяйстве</p>
        
        <ul class="list--dotted">
          <li>пожарных вышек</li>
          <li>крановых машин</li>
          <li>мостовых кранов</li>
          <li>других высотных объектов</li>
        </ul>
      </div>
      
      <div>
        <h5>Ремонт пожарных вышек</h5>
      <p>Восстановление старых пожарных вышек. Наращивание вышек на 12-15 метров.
paint metal structures

repair old tower </p>
      </div>

    </div>

  </div>
</section>

{{-- walkie_talkie --}}
<section class="_article" id='walkie_talkie'>
  
  <div class="panel__row _frame">
    
    <div class="panel__item _article">
      <h3>{{ __('messages.walkie_talkie') }}</h3>
      <p>В лесном хозяйстве за неимением мобильной связи возможно использование альтернативной радио связи. Наша компания производит: </p>
      
      <div class="walkie-servise__list">
        <ul class="list--dotted">
          <li>ремонт</li>
          <li>наладка</li>
          <li>продажа</li>
        </ul>

        <div class="walkie">
          <img src="{{ asset('img/service/walkie.jpg') }}" width="382" height='auto' alt="" loading='lazy'/>
        </div>
      </div>
    </div>
    
  </div>
  
</section>

@endsection
