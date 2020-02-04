<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Narudzbina extends Model
{
    protected $fillable = [
        'id', 'Korisnik', 'Cena'
       ];
       protected $table = 'narudzbine';

       public function pesme(){

        return $this->belongsToMany('App\Pesma');
       }
}
