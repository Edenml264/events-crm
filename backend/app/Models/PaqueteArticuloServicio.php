<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaqueteArticuloServicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'paquete_id', 'articulo_servicio_id', 'cantidad'
    ];
}
