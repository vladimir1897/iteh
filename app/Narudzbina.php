<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Narudzbina extends Model
{
    protected $fillable = [
        'id', 'Korisnik', 'Cena'
       ];
       protected $table = 'narudzbina';

       public function pesme(){

        return $this->belongsToMany('App\Pesma');
       }

       public function user(){
           return $this->belongsTo('App\User','userID');
       }
}
