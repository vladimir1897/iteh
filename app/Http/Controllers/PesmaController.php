<?php

namespace App\Http\Controllers;

use App\Pesma;
use App\Zanr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesmaController extends Controller
{
    public function dodaj(){
        $zanrovi = Zanr::get();
        return view('pesma.dodaj',compact('zanrovi'));
    }

    public function store(Request $request){
        $request->file('pesmaZaUpload')->storeAs('public/pesme',$request->file('pesmaZaUpload')->getClientOriginalName());
        $request->file('slikaZaUpload')->storeAs('public/slike',$request->file('slikaZaUpload')->getClientOriginalName());
        $pesma = new Pesma();
        $pesma->Naziv = $request->input('ime');
        $pesma->Cena = $request->input('cena');
        $pesma->ZanrID = $request->input('zanr');
        $pesma->Lokacija = $request->file('pesmaZaUpload')->getClientOriginalName();
        $pesma->Slika = $request->file('slikaZaUpload')->getClientOriginalName();
        $pesma->Autor = $request->input('autor');
        $pesma->save();

        return redirect('/');
    }
}
