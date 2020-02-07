<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pesma;

class Zanr extends Model
{
    protected $fillable= [
        'id', 'Naziv'
    ];
    protected $table = 'zanr';

    public function pesme(){
        return $this->hasMany(Pesma::class,'ZanrID');
    }
}
