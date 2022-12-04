<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MunicipioRiesgo extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'municipio_id',
        'evento',
        'muertos',
        'heridos',
        'desaparecidos',
        'personas',
        'familias',
        'viv_destru',
        'viv_aver',
        'vias',
        'ptes_vehic',
        'ptes_peat',
        'acued',
        'alcant',
        'c_salud',
        'c_educat',
        'c_comunit',
        'hectareas',
        'otros'
    ];

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}
