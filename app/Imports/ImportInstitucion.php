<?php

namespace App\Imports;

use App\Models\Establecimiento;
use App\Models\Institucion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class ImportInstitucion implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }

    public function sheets(): array
    {
        return [
            'SEDES' => new self(),
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $establecimiento = Establecimiento::where('cod_dane', $row[4])->first();

        return new Institucion([
            'establecimiento_id' => $establecimiento ? $establecimiento->id : null,
            'cod_dane' => $row[4],
            'nombre' => $row[13],
            'territorio' => $row[1],
            'municipio' => $row[2],
            'nombre_institucion' => $row[3],
            'cod_dane_municipio' => $row[14],
            'sede' => $row[5],
            'cod_dane_sede' => $row[6],
            'estado' => $row[7],
            'ubicacion' => $row[8],
            'direccion' => $row[9],
            'modalidad' => $row[10],
            'latitud' => $row[11],
            'longitud' => $row[12],
            'direccion_2' => $row[16],
            'telefono' => $row[17],
            'estado_sede' => $row[18],
            'modelos' => $row[20],
            'niveles' => $row[19],
            'grados' => $row[21]
        ]);
    }
}
