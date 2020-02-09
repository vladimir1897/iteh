@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                @if($pesme->count())
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Pesme</th>
                        <th class="text-center">Cena</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($pesme as $pesma)
                    <tr id="pesma_{{$pesma->id}}">
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{$pesma->Slika}}" style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$pesma->Naziv}}</h4>
                                    <span>Zanr: </span><span class="text-info"><strong>{{$pesma->zanr->Naziv}}</strong></span>
                                    <h5 class="media-heading"> Autor: <a href="#">{{$pesma->Autor}}</a></h5>
                                </div>
                            </div></td>

                        <td class="col-sm-1 col-md-1 text-center" id="pesma_cena_{{$pesma->id}}"><strong>{{$pesma->Cena}}$</strong></td>
                        <td class="col-sm-1 col-md-1">

                            <a type="submit" class="btn btn-danger" href="{{route('korpa.obrisi',['pesmaID'=>$pesma->id])}}">Obrisi
                            </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Ukupna cena pesama<br>Procenat sajtu(10%)</h5><h3>Ukupno</h3></td>
                        <td class="text-right"><h5><strong>
                                    <span id="ukupna_cena"> {{$ukupnaCena}}</span> <br><span id="procenat">{{$procenat}}</span></strong></h5><h3>$<span id="total">{{$total}}</span></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <form action="{{route('home')}}" method="post">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Nastavi sa kupovinom
                                </button></form></td>
                        <td>
                            <form method="post" action="{{route('narudzbina.dodaj')}}">
                                @csrf
                                <input type="hidden" value="{{$total}}"  name="UkupnaCena">
                                <button type="submit" class="btn btn-success">
                                    Kupi <span class="glyphicon glyphicon-play"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                @else
                <h1 class='col-md-offset-5'>Korpa je prazna</h1>
                @endif
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            @foreach($pesme as $pesma)
            $('#pesma_cena_{{$pesma->id}}').html(geoplugin_currencyConverter({{$pesma->Cena}}));
            @endforeach
            $('#ukupna_cena').html(geoplugin_currencyConverter({{$ukupnaCena}}));
            $('#procenat').html(geoplugin_currencyConverter({{$procenat}}));
            $('#total').html(geoplugin_currencyConverter({{$total}}));
        });
    </script>
@endpush
