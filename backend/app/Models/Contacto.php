<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id', 'nombre', 'email', 'telefono', 'puesto', 'notas'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
