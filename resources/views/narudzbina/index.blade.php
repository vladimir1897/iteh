@extends('layouts.app')

@section('content')
    <table class="table table-striped table-hover display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Narudzbina ID</th>
            <th>Kupio</th>
            <th>Cena</th>
        </tr>
        </thead>
        <tbody>
        @foreach($narudzbine as $narudzbina)
            <tr>
                <td>{{$narudzbina->id}}</td>
                <td>{{$narudzbina->user->name}}</td>
                <td>{{$narudzbina->cena}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
