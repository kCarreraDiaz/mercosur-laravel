<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Guardo los datos de tabla en un vector
    protected $fillable=[
        'nombre_prod',
        'descripcion',
        'stock',
        'precio'
    ];
}
