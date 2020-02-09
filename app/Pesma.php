<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Zanr;

class Pesma extends Model
{
   protected $fillable = [
    'Naziv', 'Lokacija', 'Cena','Slika', 'ZanrID', 'UserID'
   ];
   protected $table = 'pesme';

   public function narudzbine(){

    return $this->belongsToMany('App\Narudzbina');
   }

   public function zanr(){
      return $this->belongsTo(Zanr::class,'ZanrID');
   }
}
