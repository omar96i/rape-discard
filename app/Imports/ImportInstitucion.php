<?php

namespace App\Imports;

use App\Models\Institucion;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportInstitucion implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Institucion([
            'territorio' => $row[1],
            'fid_colegio' => $row[2],
            'id_institucion' => $row[3],
            'municipio' => $row[4],
            'nombre_institucion' => $row[5],
            'norte' => $row[6],
            'este' => $row[7],
            'cod_dane' => $row[8],
            'sede' => $row[9],
            'estado' => $row[10],
            'ubicacion' => $row[11],
            'direccion' => $row[12],
            'modalidad' => $row[13],
            'latitud' => $row[14],
            'longitud' => $row[15],
        ]);
    }
}
