<section class="gallery">
  <div class="gallery__wrapper @isset ($sClass)  {{$sClass}} @endisset " >
    
    <div class="gallery__body">
      
      {{-- arrow --}}
      <div class="gallery__arrow _arrow-inactive" data-arrow-cycle-left="">
        <div class="arrow-cycle--left"></div>
      </div>
      
      {{-- list --}}
      <div class="gallery__frame">
        <div class="gallery__list">
          {{ $slot }}
        </div>
      </div>

      {{-- arrow --}}
      <div class="gallery__arrow" data-arrow-cycle-right="">
        <div class="arrow-cycle--right"></div>
      </div>
      
    </div>
    
    {{-- legend --}}
    <div class="gallery__legend legend"></div>
    
  </div>
</section>