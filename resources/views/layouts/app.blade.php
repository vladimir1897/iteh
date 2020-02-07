
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
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  @stack('styles')
  <script src="JS/js.js"></script>

  <title>phpMusic</title>
</head>
<body>
  <example-component></example-component>
   @include('layouts.nav');
   
   @yield('content')
   
    
 
       
    
      
      @include('layouts.footer');
    
  </body>
    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @stack('scripts')

    
</html>
