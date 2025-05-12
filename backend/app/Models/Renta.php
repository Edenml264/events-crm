<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Renta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id', 'fecha_inicio', 'fecha_fin', 'ubicacion', 'estado', 'notas'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function detalleRentas()
    {
        return $this->hasMany(DetalleRenta::class);
    }
}
