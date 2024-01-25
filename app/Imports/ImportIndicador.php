<?php

namespace App\Imports;

use App\Models\Indicador;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportIndicador implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 3;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Indicador([
            'codigo_departamento' => $row[0],
            'departamento' => $row[1],
            'codigo_entidad' => $row[2],
            'entidad' => $row[3],
            'dimension' => $row[4],
            'indicador' => $row[5],
            'dato_numerico' => $row[6],
            'date' => $row[7],
            'fuente' => $row[8],
        ]);
    }
}
