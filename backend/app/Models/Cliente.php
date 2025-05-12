<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_razon_social', 'tipo', 'rfc', 'direccion_fiscal', 'notas'
    ];

    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }

    public function rentas()
    {
        return $this->hasMany(Renta::class);
    }

    public function cotizaciones()
    {
        return $this->hasMany(Cotizacion::class);
    }
}
