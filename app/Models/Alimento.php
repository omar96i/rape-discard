<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function departamentos(){
        return $this->belongsToMany(Departamento::class)->withPivot('cantidad', 'departamento_id');
    }
}
