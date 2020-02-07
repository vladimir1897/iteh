<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zanr;

class AjaxController extends Controller
{
    public function pretragaZanr(Request $request){
        return Zanr::where('Naziv','like','%'.$request->input('zanr').'%')->with('pesme')->get();
    }
}
