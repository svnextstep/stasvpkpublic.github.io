@extends('layouts.app')


@section('content')

<div class="presentation net-card">
  <div class="presentation__title">
    <div>Television system</div>
    <div class="presentation__title-accent">{{ __('messages.net') }}</div>
  </div>
</div>

{{-- TOP PANEL - name and main info --}}
<div class="presentation__card">
  
  <div class="bright_slogan_design">каждый участок под контролем</div>
  <p>Сеть профессиональных многокамерных телесистем наблюдения за лесом обеспечивает</p>
  
  <div class="presentation__card-title">
    <span class="_color-accent">Точность координат </span> возгорания <br/>
     и полный <span class="_color-accent">контроль</span> над <span class="_color-accent">всеми</span> <br/>
      участками лесного хозяйства  
  </div>

  <p>Различные уровни доступа к данным камер сети ВПК возможны из пунктов наблюдения</p>

  <x-accents-list>
    <x-accents-item>лесничества</x-accents-item>
    <x-accents-item>лесхоза</x-accents-item>
    <x-accents-item>соседнего лесхоза</x-accents-item>
    <x-accents-item>областного офиса</x-accents-item>
  </x-accents-list>

  <div class="attantion-frame">Защита данных гарантирована. Что особенно актуально во время военных действий. <a href="{{route('services')}}#protection" class="text_read_more">{{__('messages.text_read_more')}}</a></div>
    
</div>

<x-gallery-wrapper>
  {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{asset('/img/tv_system/monitore_map_fire_left.png')}}"  width="400" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <h5>Точность координат</h5>
      <p>Точность координат обеспечивается пересечением лучей двух камер</p>
      <p>Одна камера указывает лишь направление возгорания. Вторая - уточняет место. </p>
    </x-gallery-item-desc>
  </x-gallery-item>
  
  {{-- ITEM --}}
  <x-gallery-item>
    <x-gallery-item-img>
      <img src="{{asset('/img/tv_system/monitore_map_areas.png')}}"  width="400" height="auto"  alt="demo search fire" loading="lazy" />
    </x-gallery-item-img>
    
    <x-gallery-item-desc>
      <h5>Полный контроль</h5>
      <p>Контроль над всеми участками хозяйства обеспечивается разработкой сети телесистем дающих точные координаты каждого метра леса.</p> 
    </x-gallery-item-desc>
  </x-gallery-item>

</x-gallery-wrapper>

<section>
  <h2>Уровни контроля сети телесистем</h2>
 
  {{-- TABS --}}
  <x-tabs-list :aTabItems="['Локальный', 'Расширенный', 'Централизованный']">
    
    {{-- TABS local content Item  --}}
    <x-tabs-content-item classActive="_active">
      <x-row>
        
        <x-item>
          <h3>Создание сети лесничества</h3>
          
          {{-- several to one --}}
          <x-expand-block sTitle="Индивидуальный проект">
            <p>Схемы размещения камер отдельного хозяйства разрабатываются на основе ландшафта данной местности. Предприятие ВПК имеет в своем распоряжении карту <b>рельефа Украины от NASA с учетом высоты леса</b>.</p>
            <p>На основе карты осуществляется <b>компьютерное моделирование </b> сети и конфигураций телесистем ВПК. Благодаря своей гибкости телесистема позволяет расширять свои возможности <b>в соответствии с бюджетом и потребностями </b> хозяйства.</p>
            <p>Объединение телесистем в сеть осуществляется в основном с помощью радиоканалов, кабелей или интернета.</p>
          </x-expand-block>
         
          {{-- several to central office --}}

           <x-expand-block sTitle="Пункт наблюдения">
            <p>Каждый пункт наблюдения лесничества имеет доступ к данным камер и возможность ими управлять - камеры находятся в режиме постоянного планового осмотра леса, но если возникла необходимость просмотреть определенный участок, Вы можете повернуть ее в нужном направлении. </p>
          </x-expand-block>
        </x-item>
        
        {{-- DEMO BLOCK --}}
        <x-item>
          <div class="net-alone-office__row">

            <div class="net_wrapper" id="local-net-panel" data-init-action="data_transfer">

              {{-- map --}}
              <div class="map__block">
                <x-transfer-svg></x-transfer-svg>
                <div class="cameras-transfer"></div>
               
                <div class="forestry forestry_1" id="central-forestry_1">

                  <div class="forestry__cameras">
                    <x-camera-watch-pair></x-camera-watch-pair>
                    <x-camera-watch-pair></x-camera-watch-pair>
                  </div>

                  <x-office-art sClass="forestry__office" iId="forestry_office_1">Region office</x-office-art>

                </div>
                

              </div>

            </div>
          </div>
        </x-item>
        
      </x-row>
      
    </x-tabs-content-item>
    
    {{-- TABS expand content Item --}}
    <x-tabs-content-item>
      <x-row>
        
        <x-item>
          <h3>Расширение сети</h3>
          
          <x-expand-block sTitle="Основные положения">
            <p>Любой вид расширения ( объединения ) сетей возможет только в случае использования телесистем производства ВПК. Приоритет  в управлении камерой остаеться за собственником сети, но по желанию приоритеты могут быть изменены.</p>
          </x-expand-block>
        
          <x-expand-block sTitle="Соседние лесничества">
            <p>Если камера соседнего лесничества покрывает площадью своего обзора Ваши территории, то ее можно подключить к Вашей локальной сети.</p>
            <p><em>Например,</br> 
              Лесничество_1 может подключить к своей сети камеры 5 и 6 принадлежащие Лесничеству_2.</br>
              А лесничество_2 использовать камеры 1 и 2 принадлежащие Лесничеству_1.</em></p>
            <p>Вы можете просматривать информацию с подключенной камеры соседа, управлять ею. Таким образом Вы и Ваш сосед можете сэкономить на установке дополнительных камер.</p>
          </x-expand-block>

          <x-expand-block sTitle="Соседние лесхозы">
            <p>Лесничество может использовать камеры лесничетства соседнего лесхоза, если обе сети используют телесистемы ВПК.</p>
          </x-expand-block>
        </x-item>
        
        {{-- DEMO BLOCK --}}
        <x-item>
          <div class="net-expand__row">
            <div class="net_wrapper">
              
              <div class="create_net_comments">
                <div class="step _active">
                  <div>Лесничество</br>1</div>
                  <div class="_note">cеть телесистем ВПК</div>
                </div>

                <div class="comment_bottom _active">
                  <div>Лесничество</br>2</div>
                  <div class="_note">cеть телесистем ВПК</div>
                </div>
              </div>

            </div>
          </div>
        </x-item>
        
      </x-row>
    </x-tabs-content-item>
    
    {{-- TABS content Item --}}
    <x-tabs-content-item>
      <x-row>
        
        <x-item>
          <h3>Возможности объединенных сетей</h3>
          
          {{-- several to one --}}
          <x-expand-block sTitle="Объединение лесничеств в лесхозы">
            <p>Наблюдательный пункт лесхоза подключается ко всем локальным сетям подведомственных лесничеств, в которых установлены телекамеры ВПК.</p>
            <p><i>Приоритет </i> в управлении камерой передается пункту наблюдения лесхоза. </p>
          </x-expand-block>
          
          {{-- several to central office --}}
          <x-expand-block sTitle="Объединение лесхозов в обласной центр наблюдения">
            <p>Областному центру наблюдения доступны все данные с камер подведомственных лесхозов. </p>
            <p><i>Приоритет </i> в управлении камерой передается в обласной центр наблюдения. </p>
            <p>Имеется возможность не только управлять камерами, но и подключиться к системе оповещения пожара. А так же использовать базы данных хозяйств, сводить воедино бухглтерию и многое другое.</p>
          </x-expand-block>
        </x-item>
        
        {{-- DEMO BLOCK --}}
        <x-item>
          <div class="net-central-office__row">

            <div class="net_wrapper" id="central-net-panel" data-init-action="data_transfer">

              {{-- map --}}
              <div class="map__block">
                <x-transfer-svg></x-transfer-svg>
                <div class="cameras-transfer"></div>
                
                {{-- net region 1 --}}
                <div class="forestry forestry_1" id="central-forestry_1">

                  <div class="forestry__cameras">
                    <x-camera-watch-pair></x-camera-watch-pair>
                    <x-camera-watch-pair></x-camera-watch-pair>
                  </div>

                  <x-office-art sClass="forestry__office">Forestry 1</x-office-art>

                </div>
                {{-- net region 2 --}}
                <div class="forestry forestry_2" id="central-forestry_2">

                  <div class="forestry__cameras">
                    <x-camera-watch-pair></x-camera-watch-pair>
                    <x-camera-watch-pair></x-camera-watch-pair>
                  </div>

                  <x-office-art sClass="forestry__office" iId="forestry_office_2">Forestry 2</x-office-art>

                </div>
                
                {{-- net region 3 --}}
                <div class="forestry forestry_3" id="central-forestry_3">

                  <div class="forestry__cameras">
                    <x-camera-watch-pair></x-camera-watch-pair>
                  </div>

                  <x-office-art sClass="forestry__office" iId="forestry_office_3">Forestry 3</x-office-art>

                </div>
                
                <x-office-art sClass="forestry__office central-office" iId="central-office">Central office</x-office-art>
                
              </div>
              
              
              <div class="create_net_comments">
                <div class="step _active">
                  <p>all regions networks monitoring from </p>
                  <p><span class="area_name">central office</span></p>
                  <button class="btn-tool btn__secondary_transparent btn_net_central_office_show-again _hide" id="local-net_again">Show again</button>
                </div>

              </div>
            </div>
          </div>
        </x-item>
        
      </x-row>
    </x-tabs-content-item>
    
  </x-tabs-list>
  
</section>

@endsection
