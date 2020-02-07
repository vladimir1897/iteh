<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesma;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pesme = Pesma::get();
        return view('home',compact('pesme'));
    }
}
