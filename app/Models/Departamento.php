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
        return $this->belongsToMany(Alimento::class)->withPivot('cantidad', 'alimento_id');
    }

    public function municipios(){
        return $this->hasMany(Municipio::class);
    }
}
