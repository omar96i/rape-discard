<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'departamento',
        'tipo_de_turismo',
        'nombre',
        'estado',
        'descripcion',
        'logo',
        'foto_portada',
        'contacto',
        'telefono',
        'lat',
        'lng',
        'website',
        'correo',
        'rnt',
    ];
}
