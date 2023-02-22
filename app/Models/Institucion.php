<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'instituciones';

    protected $fillable = [
        'territorio',
        'fid_colegio',
        'id_institucion',
        'municipio',
        'nombre_institucion',
        'norte',
        'este',
        'cod_dane',
        'sede',
        'cod_dane_sede',
        'estado',
        'ubicacion',
        'direccion',
        'modalidad',
        'latitud',
        'longitud',
    ];
}
