
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/jplayer.blue.monday.css')}}">
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <script src="JS/js.js"></script>

  <title>phpMusic</title>
</head>
<body>
  
   @include('layouts.nav');
   
   
   <div class ="form-group">
   <div class="input-group">
        <span class="input-group-addon">Pretraga</span>
        <input type="text" name="search_text" id="search_text" placeholder="Pretrazi muziku po zanru" class= "form-control"/>
  </div>
  </div>
  <div>
  </div>
  <div id="result"></div>
  <div class="container col-md-8 col-md-offset-4" id="IstaknutePesme">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="{{asset('img/1.jpg')}}">
    </div>

    <div class="item">
    <img src="{{asset('img/2.jpg')}}">
    </div>

    <div class="item">
    <img src="{{asset('img/5ibiza.jpg')}}">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Prosli</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Sledeci</span>
  </a>
</div>   
  </div>
        <table id="SvePesme" class="table table-striped table-hover display" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Ime</th>
                    <th>Zanr</th>
                    <th>Postavio</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
                
                
            </tbody>
        </table>
    
 
       
    
      
      @include('layouts.footer');
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
</html>
