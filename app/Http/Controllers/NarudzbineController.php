<?php

namespace App\Http\Controllers;

use App\Narudzbina;
use Illuminate\Http\Request;

class NarudzbineController extends Controller
{
    public function index(){
        $narudzbine = Narudzbina::with('user')->get();

        return view('narudzbina.index',compact('narudzbine'));
    }

    public function create(){
        $korpa = session()->get('korpa');
        $ukupnaCena = collect($korpa)->sum('Cena');
        $narudzbina = new Narudzbina();
        $narudzbina->userID = auth()->user()->id;
        $narudzbina->cena = $ukupnaCena;
        $narudzbina->save();
        $narudzbina->pesme()->saveMany($korpa);
        $narudzbina->save();
        session()->remove('korpa');
        return redirect('/');
    }
}
