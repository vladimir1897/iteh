@extends('layouts.app')

@section('content')
<div class ="form-group">
   <div class="input-group">
        <span class="input-group-addon">Pretraga</span>
        <input type="text" name="search_text" id="search_text" placeholder="Pretrazi muziku po zanru" class= "form-control"/>
       <h4 align="center"> </h4>
       <div class="table-responsive" style=" overflow-x: visible;">
           <table class="table table bordered">
               <tr style="display:none" id="pretraga_header">
                   <th>Naziv</th>
                   <th>Cena</th>
                   <th>Zanr</th>
               </tr>
               <tbody id="pretraga_body">

               </tbody>
           </table>
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
 @csrf
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
  <div class="container">
        <table id="SvePesme" class="table table-striped table-hover display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Ime</th>
                    <th>Zanr</th>
                    <th>Postavio</th>
                    <th>Cena</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesme as $pesma)
                    <tr>
                        <td><a id="pusti_pesmu_{{$pesma->id}}" onclick="pustiPesmu('{{url('storage/pesme/'.$pesma->Lokacija)}}','pusti_pesmu_{{$pesma->id}}')">play</a></td>
                <td><img width='40px' height='40' src="{{url('storage/slike/'.$pesma->Slika)}}"></td>
                <td>{{$pesma->Naziv}}</td>
                <td>{{$pesma->ZanrID}}</td>
                <td>{{$pesma->Autor}}</td>
                <td id="pesma_cena_{{$pesma->id}}">{{$pesma->Cena}}</td>
                        <td><a class="btn btn-primary" href="{{route('korpa.dodaj',['pesmaID'=>$pesma->id])}}">Dodaj u korpu</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      <audio id="PesmaPlay">

      </audio>
        </div>
@endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
@endpush
@push('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script>
    $(document).ready(function(){
       @foreach($pesme as $pesma)
       $('#pesma_cena_{{$pesma->id}}').html(geoplugin_currencyConverter({{$pesma->Cena}}));
       @endforeach
    $('#SvePesme').DataTable();
        $('#search_text').keyup(function(){
            $('#pretraga_body').html('');
            $("#pretraga_header").css('display','hidden');
            var txt= $(this).val();
            if(txt!='')
            {
              $.ajax({
                    url:"{{route('pretraga.zanr')}}",
                    method: "post",
                    data: {zanr:txt,_token:'{{csrf_token()}}'},
                    dataType: "text",
                    complete: function (data) {
                      pesme = JSON.parse(data.responseText);
                      console.log(pesme.length);
                      if(pesme.length > 0) {
                          $("#pretraga_header").css('display','block');
                      }

                     for(let index in pesme){
                         $('#pretraga_body').append('<tr><td>'+pesme[index].Naziv+'</td><td>'+pesme[index].Cena+'</td><td>'+pesme[index].zanr.Naziv+'</td> </tr>')
                     }
                  }
            });
            }
            else
            {
                $('#result').html('');
            }
        });
    });
 </script>
@endpush
