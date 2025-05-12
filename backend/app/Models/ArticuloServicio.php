<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticuloServicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'tipo', 'descripcion', 'cantidad_total', 'cantidad_disponible', 'estado', 'precio_renta'
    ];

    public function paquetes()
    {
        return $this->belongsToMany(Paquete::class, 'paquete_articulo_servicios')->withPivot('cantidad')->withTimestamps();
    }

    public function detalleRentas()
    {
        return $this->hasMany(DetalleRenta::class);
    }

    public function detalleCotizacions()
    {
        return $this->hasMany(DetalleCotizacion::class);
    }

    public function reparacionArticulos()
    {
        return $this->hasMany(ReparacionArticulo::class);
    }
}
