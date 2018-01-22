<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- For laravel application there should be meta tag else it will throw error in javascript conosle -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Basic Website</title>
    <link rel="shortcut icon" type="image/png" href={{ asset('images/icon.png') }}/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  @include('inc.navbar')
  @if(Request::is('/'))
    @include('inc.showcase')
  @endif
  <div id="app" class="container">
      @include('inc.message')
      <div class="row">
          <div class="col-lg-10 left"> @yield('content')</div>
          <div class="col-lg-2 text-right"> @include('inc.sidebar')</div>
      </div>
  </div>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
<br/>
@include('inc.footer')
</html>
