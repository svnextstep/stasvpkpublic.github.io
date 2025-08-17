@extends('layouts.app')


@section('content')

<h1>{{ __('messages.contacts') }}</h1>

<div class="_article">
  <div class="contacts">
    {{-- left --}}
    <div class="contacts__panel">
      
      <div class="contacts__hands">
        <p>Наш многолетний труд направлен на помощь Вам, уважаемые работники леса.</p>
        <p>Мы искренне стараемся создать для Вас наилучшие условия приобретения  и эксплуатации наших телесистем.</p>
        <div class="hands">
          <div>
            <img src="{{asset('/img/contact_as_forest.jpg')}}" width="200" height="auto" alt="" loading="lazy" />
          </div>
          
          <div>
            <img src="{{asset('/img/hands.jpg')}}" width="200" height="auto" alt="" loading="lazy" />
          </div>
          
        </div>
      </div>
      
      {{-- logo --}}
      <div class="contacts__phones">
        <div>
          <img src="{{asset('/img/vpk.png')}}" width="106" height="54"  alt="logo" loading="lazy"/>
        </div>
        <div>
          (099) 5404004</br>
          (068) 8404004</br>
          (057) 72-82446</br>
        </div>
        
        <div>Украина, г. Харьков,</br> ул.Рождественская, 29-б</div>
        <div>e-mail: vpktech@ukr.net</div>
      </div>
      
    </div>
    
    {{-- right --}}
    <div class="contacts__map">
      <img src="{{asset('/img/contact_as_map.jpg') }}" width="695" height="auto" alt="" loading="lazy"/>
    </div>
    
  </div>
</div>

@endsection
