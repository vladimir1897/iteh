<?php

use App\Pesma;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('pesme/{id}', function($id) {
    return Pesma::find($id);
});

Route::get('pesme', function() {
    return Pesma::get();
});

Route::put('pesma/{id}', function(Request $request, $id) {
    $pesma = Pesma::findOrFail($id);
    $pesma->update($request->all());

    return $pesma;
});

Route::post('pesme', function(Request $request) {
    return Pesma::create($request->all);
});

Route::put('pesma/{id}', function(Request $request, $id) {
    $pesma = Pesma::findOrFail($id);
    $pesma->update($request->all());

    return $pesma;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
