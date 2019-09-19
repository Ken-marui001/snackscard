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
      <div class="header-title"><p>SnacksCard</p></div>
      <div class="user-info">
      <a href="/users/{{Auth::user()->id}}/edit"><P>{{Auth::user()->name}}</P></a>
        <img src="/storage/{{(Auth::user()->image_url) ? Auth::user()->image_url : "noimage.png"}}" />
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