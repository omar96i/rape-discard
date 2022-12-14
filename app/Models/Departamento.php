<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function alimentos(){
        return $this->belongsToMany(Alimento::class);
    }

    public function municipios(){
        return $this->hasMany(Municipio::class);
    }

    public function abastecimiento(){
        return $this->hasMany(DepartamentoAlimentoDepartamento::class);
    }

    public function relacion(){
        return $this->hasMany(AlimentoDepartamento::class);
    }
}
