<div class="params__list @if ($sClass) {{$sClass}} @endif">
  @if ($sLineAccent == 'show')
    <div class="line__horizontal-medium"></div>
  @endif

  {{ $slot }}

</div>


