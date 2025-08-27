<!DOCTYPE html>
<html>
  <head>
    <meta nane="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VPK</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  
  
  <body>
    
    <div class="wrapper">
      @yield('header')
      
      <main class="content">
        
        @if (session()->has('ie_browser') && !Cookie::has('visited'))
          <div class="_article">
            <h3>Attantion</h3>
            <div class="ie_version_alert _article">
              <p>Microsoft c июня 2022г не выпускает обновления для Internet Explorer, что вызывает ряд проблем:</p>

              <ul class="list--dotted">
                <li>отсутствие обновлений безопасности приводит к риску киберугроз</li>
                <li>старые версии имеют низкую производительность</li>
                <li>отсутствует поддержка современных технологий и возможна некорректная работа сайтов</li>
              </ul>

              <p>Рекомендуется к использованию современные браузеры Microsoft Edge, Google Chrome, Firefox, Opera Browser. </p>

              <p></p>
            </div>
          </div>
        @endif

        @yield('content')
      </main>
      
      
      @yield('footer')
    </div>
    
    <div class="arrow-cycle--top"></div>

  </body>
</html>

