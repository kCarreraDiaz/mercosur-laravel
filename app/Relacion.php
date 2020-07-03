<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    //ccreo vector para guardar datos de la BD
    protected $fillable=[
        'id_pais',
        'nom_pais2',
        'fecha'
    ];
}
