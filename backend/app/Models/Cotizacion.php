<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cotizacion extends Model
{
    protected $fillable = [
        'cliente_id',
        'fecha',
        'estado',
        'total',
        'notas',
    ];
    use HasFactory;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function detalleCotizacions()
    {
        return $this->hasMany(DetalleCotizacion::class);
    }

    public function detalleCotizacionPaquetes()
    {
        return $this->hasMany(DetalleCotizacionPaquete::class);
    }
}
