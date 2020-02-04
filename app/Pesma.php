<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesma extends Model
{
   protected $fillable = [
    'Naziv', 'Lokacija', 'Cena','Slika', 'ZanrID', 'UserID'
   ];
   protected $table = 'pesme';

   public function narudzbine(){

    return $this->belongsToMany('App\Narudzbina');
   }
}
