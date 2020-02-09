@extends('layouts.app')

@section('content')
<form class="form-horizontal col-md-offset-3" method="Post" action="{{route('pesma.store')}}" enctype="multipart/form-data">
    @csrf
    <fieldset>
        <legend>Dodaj pesmu</legend>
        <div class="form-group">
            <label for="ImePesme" class="col-lg-2 control-label">Ime pesme:</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" id="ImePesme" name="ime" placeholder="Ime">

            </div>
        </div>
        <div class="form-group">
            <label for="autor" class="col-lg-2 control-label">Autor pesme:</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">

            </div>
        </div>
        <div class="form-group">
            <label for="cena" class="col-lg-2 control-label">Cena:</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" id="cena" name="cena" placeholder="Cena u $">
            </div>
        </div>
        <div class="form-group">
            <label for="zanr" class="col-lg-2 control-label">Zanr:</label>
            <div class="col-lg-4">
                <select class="form-control " id="zanrSelekt" name="zanr">
                    @foreach($zanrovi as $zanr)
                   <option value="{{$zanr->id}}">{{$zanr->Naziv}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="pesmaZaUpload" class="col-lg-2 control-label">Pesma:</label>
            <input type="file" name="pesmaZaUpload" id="pesmaZaUpload">
        </div>
        <div class="form-group">
            <label for="slikaZaUpload" class="col-lg-2 control-label">Cover:</label>
            <input type="file" name="slikaZaUpload" id="slikaZaUpload">
        </div>
        <div class="form-group">
            <div class="col-lg-3 col-lg-offset-3">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
@endsection
