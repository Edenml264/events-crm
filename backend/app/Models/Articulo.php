<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo',
        'precio',
        'unidad_medida',
        'stock_disponible',
        'activo',
    ];
    //
}
