<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //declaro el array FILLABLE para guardar los datos de la tabla
    protected $fillable=[/**modelo indicando los campos que va a traer de la BD */
        'nombre',
        'poblacion',
        'PIB_anual',
        'PIB_capita',
        'IDH',
        'deuda_total',
        'deuda',
        'deficit'
    ];
}
