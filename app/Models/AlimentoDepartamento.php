<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlimentoDepartamento extends Model
{
    use HasFactory;

    protected $table = 'alimento_departamento';

    protected $fillable = [
        'alimento_id',
        'departamento_id',
    ];

    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function alimento(){
        return $this->belongsTo(Alimento::class);
    }

    public function departamento_alimento_departamento(){
        return $this->hasMany(DepartamentoAlimentoDepartamento::class, 'alimento_departamento_id');
    }
}
