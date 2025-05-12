<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetalleCotizacionPaquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'cotizacion_id', 'paquete_id', 'cantidad', 'precio_paquete', 'notas'
    ];

    public function cotizacion()
    {
        return $this->belongsTo(Cotizacion::class);
    }

    public function paquete()
    {
        return $this->belongsTo(Paquete::class);
    }
}
