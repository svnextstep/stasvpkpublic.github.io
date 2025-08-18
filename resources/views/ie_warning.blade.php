@extends('layouts.app')


@section('content')


   <h1>Attantion</h1>

  <div class="ie_version_alert _article">
    <p>Microsoft c июня 2022г не выпускает обновления для Internet Explorer, что вызывает ряд проблем:</p>

    <ul class="list--dotted">
      <li>отсутствие обновлений безопасности приводит к риску киберугроз</li>
      <li>старые версии имеют низкую производительность</li>
      <li>отсутствует поддержка современных технологий и возможна некорректная работа сайтов</li>
    </ul>

    <p>Рекомендуется к использованию современные браузеры Microsoft Edge, Google Chrome, Firefox, Opera Browser. </p>
    
    <p>
      <a href="{{ $redirectUrl }}">Продолжить просмотр в этом браузере</a>
    </p>
    <p></p>
  </div>
   
  
@endsection