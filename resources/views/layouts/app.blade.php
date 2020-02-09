
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/jplayer.blue.monday.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.blue.monday.css')}}">
    <script src="https://use.fontawesome.com/390385b9e9.js"></script>
  @stack('styles')
  <script src="JS/js.js"></script>

  <title>phpMusic</title>
</head>
<body>
  <example-component></example-component>
   @include('layouts.nav')

   @yield('content')






      @include('layouts.footer');

  </body>

    <script src="{{asset('js/app.js')}}"></script>
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @stack('scripts')


</html>
