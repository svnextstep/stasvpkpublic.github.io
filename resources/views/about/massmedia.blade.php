@extends('layouts.app')


@section('content')
 <h1>{{ __('messages.massmedia') }}</h1>
 
 <div class="_article">
   <div class="take-attantion _accent">Реклама, статьи в специализированном журнале "Лесной и охотничий журнал"</div>
 </div>
 
 <x-gallery-wrapper>
   
  @for ($i = 2; $i <= 44; $i++)
  <x-gallery-item>
    <img src="{{asset('/img/about/massmedia/magazine/add/' . $i . '.jpg')}}" width="300" height="auto" alt="" loading="lazy" />
  </x-gallery-item>
  @endfor
  
 </x-gallery-wrapper>
 

 <div class="panel__row">
   <div class="panel__item _article">
     <div class="take-attantion _accent">Знакомим с инновационными технологиями в области охраны лесов</div>
     <p>Мы находим необходимым обратить внимание сотрудников лесного хозяйства на <a href="{{ route('ts_descr') }}">особенности систем наблюдения</a> за лесом, так как не всякая телесистема может качественно выполнить работу.</p>
   </div>
   <div class="panel__item"></div>
 </div>
 
<x-gallery-wrapper>
   
  @for ($i = 2; $i <= 4; $i++)
  <x-gallery-item>
    <img src="{{asset('/img/about/massmedia/magazine/articles/' . $i . '.jpg')}}" width="300" height="auto" alt="" loading="lazy" />
  </x-gallery-item>
  @endfor
  
 </x-gallery-wrapper>

 
@endsection