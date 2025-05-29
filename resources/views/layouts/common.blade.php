<!DOCTYPE html>
<html>
  <head>
    <meta nane="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VPK</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  
  
  <body>
    
    <div class="wrapper">
      @yield('header')
      
      <main class="content">
        @yield('content')
      </main>
      
      
      @yield('footer')
    </div>
    
    <div class="arrow-cycle--top"></div>

  </body>
</html>

