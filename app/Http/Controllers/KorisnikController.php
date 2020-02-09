<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KorisnikController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('user.index',compact('user'));
    }
}
