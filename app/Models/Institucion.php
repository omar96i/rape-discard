<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'instituciones';

    protected $fillable = [
        'establecimiento_id',
        'territorio',
        'municipio',
        'nombre_institucion',
        'nombre',
        'cod_dane_municipio',
        'cod_dane',
        'sede',
        'cod_dane_sede',
        'estado',
        'ubicacion',
        'direccion',
        'modalidad',
        'latitud',
        'longitud',
        'zona',
        'direccion_2',
        'telefono',
        'estado_sede',
        'niveles',
        'grados',
        'modelos',
    ];

    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class, 'establecimiento_id');
    }
}
