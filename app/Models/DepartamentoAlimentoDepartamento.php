<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentoAlimentoDepartamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'alimento_departamento_id',
        'departamento_id',
        'cantidad',
        'fecha',
    ];

    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function alimento(){
        return $this->belongsTo(AlimentoDepartamento::class, 'alimento_departamento_id');
    }

    public function countRelationAlimento(){
        return $this->belongsTo(AlimentoDepartamento::class, 'alimento_departamento_id')->selectRaw('departamento_id, count(*) as count')->groupBy('departamento_id');
    }
}
