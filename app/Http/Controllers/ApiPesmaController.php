<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesma;

class ApiPesmaController extends Controller
{
    public function index()
    {
        return Pesma::all();
    }
 
    public function show($id)
    {
        $pesma = Pesma::find($id);
        return $pesma ? $pesma  : json_encode(['error' => 'Not found']);
    }

    public function store(Request $request)
    {
        return Pesma::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $pesma = Pesma::findOrFail($id);
        $pesma->update($request->all());

        return $pesma;
    }

    public function delete(Request $request, $id)
    {
        $pesma = Pesma::findOrFail($id);
        $pesma->delete();

        return 204;
    }
}
