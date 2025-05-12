<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReparacionArticulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'articulo_servicio_id', 'fecha_inicio', 'fecha_fin', 'descripcion', 'estado'
    ];

    public function articuloServicio()
    {
        return $this->belongsTo(ArticuloServicio::class);
    }
}
