<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Carrito DB</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    @include('store.partials.nav')
    <div class="container">
      @yield('content')
    </div>
    @include('store.partials.footer')
  </body>
  <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{url('lib/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{url('js/main.js')}}" charset="utf-8"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</html>
