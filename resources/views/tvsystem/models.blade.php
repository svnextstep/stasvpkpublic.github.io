@extends('layouts.app')


@section('content')

<h1>{{ __('messages.ts_models') }}</h1>

<div class="squares _article">
  
  {{-- row 1 --}}
  <x-row>

    {{-- parameters --}}
    <div class="main-parameters">
      <div class="take-attantion _accent">Производство <span  class="_color-accent">Телевизионных систем наблюдения</span> за лесом предполагает различные <span  class="text_color_logo">конфигурации</span> систем</div>
    </div>

    {{--  --}}
    <x-square-bg sWrapperClass='_keep-space'></x-square-bg>
    
    <x-square-bg iId="vpk2000"  sClass='popup_click'  sImgName="stub">
      <h3>ВПК-2000</h3>
      <div class="img_pos"><img src="{{ asset('img/tv_system/models/2000.png') }}" alt="2000"/></div>
    </x-square-bg>
  </x-row>

  {{-- row 2 --}}
  <x-row sClass="square-row-top square-row-left">
    
    {{-- MODEL 1800 --}}
    <x-square-bg iId="vpk1800"  sClass='popup_click' sImgName="stub">
      <h3>ВПК-1800</h3>
      <div class="img_pos"><img src="{{ asset('img/tv_system/models/1800.png') }}" alt="1800"/></div>
    </x-square-bg>


    {{-- MODEL 1600 --}}
    <x-square-bg iId="vpk1600"  sClass='popup_click' sImgName="stub">
      <h3>ВПК-1600</h3>
      <div class="img_pos"><img src="{{ asset('img/tv_system/models/1550.png') }}" alt="1600"/></div>
    </x-square-bg>

  </x-row>
  
  {{-- row 3 --}}
  <x-row>
    
    {{-- MODEL 1570 --}}
    <x-square-bg iId="vpk1570" sClass='popup_click' sImgName="stub">
      <h3>ВПК-1570</h3>
      <div class="img_pos _less-img"><img src="{{ asset('img/tv_system/models/1570.png') }}" alt="1570"/></div>
    </x-square-bg>


    {{-- MODEL 1552 --}}
    <x-square-bg iId="vpk1552" sClass='popup_click' sImgName="stub">
      <h3>ВПК-1552</h3>
      <div class="img_pos"><img src="{{ asset('img/tv_system/models/1552.png') }}" alt="1552"/></div>
    </x-square-bg>


    {{-- MODEL 1550 --}}
    <x-square-bg iId="vpk1550" sClass='popup_click' sImgName="stub">
      <h3>ВПК-1550</h3>
      <div class="img_pos"><img src="{{ asset('img/tv_system/models/1550.png') }}" alt="1550"/></div>
    </x-square-bg>
    
  </x-row>
  
  {{-- row 4 --}}
  <x-row sClass="square-row-top square-row-left">
    
    {{-- MODEL 1400 --}}
    <x-square-bg iId="vpk1400" sClass='popup_click' sImgName="stub">
      <h3>ВПК-1400</h3>
      <div class="img_pos _less-img"><img src="{{ asset('img/tv_system/models/1400.png') }}" alt="1400"/></div>
    </x-square-bg>

    <x-square-bg sClass='_center' sImgName="stub">
      <div class="_center">Ожидается новая телесистема с улучшенными показателями</div>
    </x-square-bg>
  </x-row>
  
</div>

{{-- popup --}}

{{-- MODEL 2000 popup --}}
<x-popup-details sTitle="Model ВПК-2000" iId='vpk2000_popup'  sClass="print_popup" >
  <x-row>
    
    <x-item>
      
      <div>
        <h5>Особенности</h5>
        <p>Камера используется в лесном хозяйстве</p>
      </div>
      
      <div>
        <h5>Корпус</h5>
        <p>модель</p>
      </div>
      
      <div>
        <h5>Повороное устройство</h5>
        <p></p>
      </div>
      
      <div>
        <h5>Дополнительные возможности</h5>
        <p></p>
      </div>
      
    </x-item>
    
    <x-item>
      
      <x-img-platform>
        <img src="{{ asset('img/tv_system/models/2000.png') }}" width="70%" height="auto"  alt="model 2000" loading='lazy'/>
      </x-img-platform>
      
      <x-params-list>
        <x-params-item sName="Диаметр объектива">98мм</x-params-item>
        <x-params-item sName="Фокусное растояние">500мм</x-params-item>
        <x-params-item sName="Увеличение">134 раза</x-params-item>
        
      </x-params-list>
    </x-item>
    
  </x-row>
</x-popup-details>

{{-- MODEL 1800 popup --}}
<x-popup-details sTitle="Model ВПК-1800" iId='vpk1800_popup' sClass="print_popup" >
  <x-row>
    <x-item>
     
      <div>
        <h5>Особенности</h5>
        <p>Камера используется в лесном хозяйстве</p>
      </div>
      
      <div>
        <h5>Корпус</h5>
        <p>модель</p>
      </div>
      
      <div>
        <h5>Повороное устройство</h5>
        <p></p>
      </div>
      
      <div>
        <h5>Дополнительные возможности</h5>
        <p></p>
      </div>
    </x-item>
    
    <x-item>
      <x-img-platform>
        <img src="{{ asset('img/tv_system/models/1800.png') }}" width="70%" height="auto"  alt="model 1800" loading='lazy'/>
      </x-img-platform>
      
      <x-params-list>
        <x-params-item sName="Диаметр объектива">72мм</x-params-item>
        <x-params-item sName="Фокусное растояние">300мм</x-params-item>
        <x-params-item sName="Увеличение">88 раза</x-params-item>
      </x-params-list>
    </x-item>
  </x-row>
</x-popup-details>

{{-- MODEL 1600 popup --}}
<x-popup-details sTitle="Model ВПК-1600" iId='vpk1600_popup' sClass="print_popup" >
  <x-row>
    <x-item>
     
      <div>
        <h5>Особенности</h5>
        <p>Камера используется в лесном хозяйстве</p>
      </div>
      
      <div>
        <h5>Корпус</h5>
        <p>модель</p>
      </div>
      
      <div>
        <h5>Повороное устройство</h5>
        <p></p>
      </div>
      
      <div>
        <h5>Дополнительные возможности</h5>
        <p></p>
      </div>
    </x-item>
    
    <x-item>
      <x-img-platform>
        <img src="{{ asset('img/tv_system/models/1550.png') }}" width="70%" height="auto"  alt="model 1600" loading='lazy'/>
      </x-img-platform>

      
      <x-params-list>
        <x-params-item sName="Диаметр объектива">69мм</x-params-item>
        <x-params-item sName="Фокусное растояние">280мм</x-params-item>
        <x-params-item sName="Увеличение">73 раза</x-params-item>
      </x-params-list>
    </x-item>
  </x-row>
</x-popup-details>

{{-- MODEL 1570 popup --}}
<x-popup-details sTitle="Model ВПК-1570" iId='vpk1570_popup' sClass="print_popup" >
  <x-row>
    
    <x-item>
      <div>
        <h5>Особенности</h5>
        <p>Камера используется в лесном хозяйстве</p>
      </div>
      
      <div>
        <h5>Корпус</h5>
        <p>модель</p>
      </div>
      
      <div>
        <h5>Повороное устройство</h5>
        <p></p>
      </div>
      
      <div>
        <h5>Дополнительные возможности</h5>
        <p></p>
      </div>
    </x-item>
    
    <x-item>
      
      <x-img-platform>
        <img src="{{ asset('img/tv_system/models/1570.png') }}" width="50%" height="auto"  alt="model 1570" loading='lazy'/>
      </x-img-platform>
      
      <x-params-list>
        <x-params-item sName="Диаметр объектива">69мм</x-params-item>
        <x-params-item sName="Фокусное растояние">280мм</x-params-item>
        <x-params-item sName="Увеличение">73 раза</x-params-item>
      </x-params-list>
    </x-item>
  </x-row>
</x-popup-details>

{{-- MODEL 1552 popup --}}
<x-popup-details sTitle="Model ВПК-1552" iId='vpk1552_popup' sClass="print_popup" >
  <x-row>
    
    <x-item>
      <div>
        <h5>Особенности</h5>
        <p>Камера используется в лесном хозяйстве</p>
      </div>
      
      <div>
        <h5>Корпус</h5>
        <p>модель</p>
      </div>
      
      <div>
        <h5>Повороное устройство</h5>
        <p></p>
      </div>
      
      <div>
        <h5>Дополнительные возможности</h5>
        <p></p>
      </div>
    </x-item>
    
    <x-item>
      
      <x-img-platform>
        <img src="{{ asset('img/tv_system/models/1552.png') }}" width="70%" height="auto"  alt="model 1552" loading='lazy'/>
      </x-img-platform>
      
      <x-params-list>
        <x-params-item sName="Диаметр объектива"></x-params-item>
        <x-params-item sName="Фокусное растояние">220мм</x-params-item>
        <x-params-item sName="Увеличение">57 раз</x-params-item>
      </x-params-list>
    </x-item>

  </x-row>
</x-popup-details>

{{-- MODEL 1550 popup --}}
<x-popup-details sTitle="Model ВПК-1550" iId='vpk1550_popup' sClass="print_popup" >
  <x-row>
    
    <x-item>
      <div>
        <h5>Особенности</h5>
        <p>Камера используется в лесном хозяйстве</p>
      </div>
      
      <div>
        <h5>Корпус</h5>
        <p>модель</p>
      </div>
      
      <div>
        <h5>Повороное устройство</h5>
        <p></p>
      </div>
      
      <div>
        <h5>Дополнительные возможности</h5>
        <p></p>
      </div>
    </x-item>
    
    <x-item>
      
      <x-img-platform>
        <img src="{{ asset('img/tv_system/models/1550.png') }}" width="70%" height="auto"  alt="model 1550" loading='lazy'/>
      </x-img-platform>
      
      <x-params-list>
        <x-params-item sName="Диаметр объектива"></x-params-item>
        <x-params-item sName="Фокусное растояние">220мм</x-params-item>
        <x-params-item sName="Увеличение">57 раз</x-params-item>
      </x-params-list>
    </x-item>
  </x-row>
</x-popup-details>

{{-- MODEL 1400 popup --}}
<x-popup-details sTitle="Model ВПК-1400" iId='vpk1400_popup' sClass="print_popup" >
  <x-row>
    
    <x-item>
      <div>
        <h5>Особенности</h5>
        <p>Камера используется в лесном хозяйстве</p>
      </div>
      
      <div>
        <h5>Корпус</h5>
        <p>модель</p>
      </div>
      
      <div>
        <h5>Повороное устройство</h5>
        <p></p>
      </div>
      
      <div>
        <h5>Дополнительные возможности</h5>
        <p></p>
      </div>
    </x-item>
    
    <x-item>
      
      <x-img-platform>
        <img src="{{ asset('img/tv_system/models/1400.png') }}" width="50%" height="auto"  alt="model 1400" loading='lazy'/>
      </x-img-platform>
      
      <x-params-list>
        <x-params-item sName="Диаметр объектива"></x-params-item>
        <x-params-item sName="Фокусное растояние">130мм</x-params-item>
        <x-params-item sName="Увеличение">31 раз</x-params-item>
      </x-params-list>
    </x-item>
  </x-row>
</x-popup-details>
@endsection
