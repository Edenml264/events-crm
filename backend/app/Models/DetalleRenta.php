<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetalleRenta extends Model
{
    use HasFactory;

    protected $fillable = [
        'renta_id', 'articulo_servicio_id', 'cantidad', 'precio_unitario'
    ];

    public function renta()
    {
        return $this->belongsTo(Renta::class);
    }

    public function articuloServicio()
    {
        return $this->belongsTo(ArticuloServicio::class);
    }
}
