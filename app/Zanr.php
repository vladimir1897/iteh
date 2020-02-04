<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
    protected $fillable= [
        'id', 'Naziv'
    ];
    protected $table = 'zanr';
}
