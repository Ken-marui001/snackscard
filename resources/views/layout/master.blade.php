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
      <div class="header-title"><a href="/"><p>SnacksCard</p></a></div>
      @if (Auth::check())
        <div class="user-info">
        <a href="/users/{{Auth::user()->id}}/edit"><P>{{Auth::user()->name}}</P></a>
          <img src="{{(Auth::user()->image_url) ? ("/storage/".Auth::user()->image_url) : "/storage/kQ8fD8bLKMN8VHFdckueUmNx8PACGxSKNkcyksqo.png"}}" />
        </div>     
      @else
        <div class="login-btn"><a href="/login">ログイン</a></div>
      @endif
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