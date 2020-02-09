<?php

namespace App\Http\Controllers;

use App\Pesma;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function pretragaZanr(Request $request){
        $pesme = Pesma::whereHas('zanr', function($query) use($request){
            $query->where('Naziv','like','%'.$request->input('zanr').'%');
        })->with('zanr')->get();


        return $pesme;
    }
}
