@extends('layouts.app')


@section('content')

<h1>{{ __('messages.subordinate')}}</h1>

<section>
  
  <x-row>
    <x-item>
      <p>Практически каждое лесное хозяйство имеет профильные предприятьия: деревообрабатывающее, тепличное и т.п. </p>
      <p>Наблюдение за такими обьектами не требует такого высокого качества оборудования как за лесом и вполне достаточно установки недорогого бытового.</p>
    </x-item>
    
    <x-item>
      <div class="take-attantion _top-0">Система наблюдения за специализированными предприятиями должна быть <span class="_color-accent">включена в единую сеть </span> </br>телесистем ВПК</div>
      <p>Для эффективного контроля за всем хозяйством  и использования всех <a href="{{ route('ts_additional')}}">возможностьей сети </a>.</p>
    </x-item>
  </x-row>

</section>

<section>
  
  <x-row>
    <x-item-no-padding sClass='img-vertial-title'>
      <div class="img-vertial-title__text">{{ __('messages.title_control_sawmill') }}</div>
      <img class='img-vertial-title__img' src="{{asset('/img/projects/sawmill.jpg')}}" alt="alt"/>
    </x-item-no-padding>
    
    <x-item-no-padding sClass='img-vertial-title'>
      <div class="img-vertial-title__text">Greenhouses control</div>
      <img class='img-vertial-title__img' src="{{asset('/img/projects/greenhouses.jpg')}}" alt="alt"/>
    </x-item-no-padding>
  </x-row>
  
</section>

@endsection
