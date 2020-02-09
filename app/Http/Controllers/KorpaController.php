<?php

namespace App\Http\Controllers;

use App\Pesma;
use Illuminate\Http\Request;

class KorpaController extends Controller
{
    public function index(){
        if(session()->has('korpa')){

            $pesme = collect(session()->get('korpa'));
        } else {
            $pesme = collect([]);
        }
        $ukupnaCena = $pesme->sum('Cena');
        $procenat = ($ukupnaCena/100)*10;
        $total = $procenat + $ukupnaCena;
        return view('korpa.index',compact('pesme','ukupnaCena','procenat','total'));
    }

    public function dodajUKorpu($pesmaID){
        $pesma = Pesma::where('id',$pesmaID)->first();
        if(!session()->has('korpa')){
            $korpa = [];
            array_push($korpa,$pesma);
            session()->put('korpa',$korpa);
        } else {
            $korpa = session()->get('korpa');
            if(!collect($korpa)->where('id',$pesmaID)->first()){
                array_push($korpa,$pesma);
                session()->put('korpa',$korpa);
            }
        }
        return redirect('/');
    }

    public function obrisiIzKorpe($pesmaID){
        if(session()->has('korpa')){
            $korpa = session()->get('korpa');
            $found = false;
            $index = null;
            foreach($korpa as $index => $pesma) {
                if ($pesma->id == $pesmaID) {
                    $found = true;
                    break;
                }
            }
            if ($found) {
                unset($korpa[$index]);
                session()->put('korpa',$korpa);
            }
        }
        return redirect()->back();
    }
}
