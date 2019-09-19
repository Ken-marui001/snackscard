<!DOCTYPE HTML>
<html lang=ja>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>SnacksCard</title>
</head>
<body>
  @section('header')
    <header>
      <div class="header_title"><p>SnacksCard</p></div>
      <div class="user-info">
        <img src="/storage/{{(Auth::user()->image_url) ? Auth::user()->image_url : "noimage.png"}}" />
        <P>{{Auth::user()->name}}</P>
      </div>
    </header>
  @show
  <main>
    @yield('contents')
  </main>
  @section('footer')
    <footer>
      <p>Footer</p>
    </footer>
  @show
</body>
</html>