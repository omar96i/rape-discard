<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    use HasFactory;
    protected $table = 'indicadores';

    protected $fillable = [
        'codigo_departamento',
        'departamento',
        'codigo_entidad',
        'entidad',
        'dimension',
        'indicador',
        'dato_numerico',
        'date',
        'fuente',
    ];
}
