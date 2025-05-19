<div class="tabs__content-item 
     @if($sClass) {{$sClass}} @endif 
     @isset ($classActive) {{$classActive}} @endisset
     ">
  {{$slot}}
</div>