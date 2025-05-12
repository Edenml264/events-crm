<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetalleCotizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'cotizacion_id', 'articulo_servicio_id', 'cantidad', 'precio_unitario'
    ];

    public function cotizacion()
    {
        return $this->belongsTo(Cotizacion::class);
    }

    public function articuloServicio()
    {
        return $this->belongsTo(ArticuloServicio::class);
    }
}
