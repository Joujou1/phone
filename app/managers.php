<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class managers extends Model
{
    protected $fillable = [
        'm_nom',
        'm_prenom',
        'm_tel',
        'm_adresse',
        'm_reglement'
    ];
}
