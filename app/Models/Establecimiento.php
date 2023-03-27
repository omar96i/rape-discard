<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_dane',
        'nombre',
        'territorio',
        'municipio',
        'total_sedes',
        'secretaria',
        'cod_dane_municipio',
        'nombre_municipio',
        'nombre_establecimiento',
        'telefono',
        'nombre_rector',
        'tipo_establecimiento',
        'etnias',
        'sector',
        'genero',
        'zona',
        'niveles',
        'jornadas',
        'caracter',
        'especialidad',
        'licencia',
        'grados',
        'modelo_educativo',
        'capacidades_excepcionales',
        'discapacidades',
        'idiomas',
        'numero_sedes',
        'estado',
        'prestador_de_servicio',
        'propiedad_planta_fisica',
        'resguardo',
        'matricula_contratada',
        'calendario',
        'internado',
        'estrato',
        'correo_electronico',
        'cod_secretaria',
        'nombre_establecimiento_2',
        'sector_2',
        'web',
        'total_matricula',
        'cantidad_sedes',
        'grupo',
    ];

    public function instituciones(){
        return $this->hasMany(Institucion::class, 'establecimiento_id');
    }
}
