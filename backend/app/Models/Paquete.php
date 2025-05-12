<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'precio_paquete', 'notas'
    ];

    public function articuloServicios()
    {
        return $this->belongsToMany(ArticuloServicio::class, 'paquete_articulo_servicios')->withPivot('cantidad')->withTimestamps();
    }

    public function detalleCotizacionPaquetes()
    {
        return $this->hasMany(DetalleCotizacionPaquete::class);
    }
}
