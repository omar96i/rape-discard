<?php

namespace App\Imports;

use App\Models\Establecimiento;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportEstablecimiento implements ToModel, WithStartRow, WithCalculatedFormulas
{
    private $sheetName = 'ESTABLECIMIENTOS';

    public function getSheetName(): string
    {
        return $this->sheetName;
    }


    public function startRow(): int
    {
        return 2;
    }

    public function sheets(): array
    {
        return [
            $this->getSheetName() => new self(),
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Establecimiento([
            'cod_dane' => $row[0],
            'nombre' => $row[1],
            'territorio' => $row[2],
            'municipio' => $row[3],
            'total_sedes' => $row[4],
            'secretaria' => $row[5],
            'cod_dane_municipio' => $row[6],
            'nombre_municipio' => $row[7],
            'nombre_establecimiento' => $row[8],
            'telefono' => $row[9],
            'nombre_rector' => $row[10],
            'tipo_establecimiento' => $row[11],
            'etnias' => $row[12],
            'sector' => $row[13],
            'genero' => $row[14],
            'zona' => $row[15],
            'niveles' => $row[16],
            'jornadas' => $row[17],
            'caracter' => $row[18],
            'especialidad' => $row[19],
            'licencia' => $row[20],
            'grados' => $row[21],
            'modelo_educativo' => $row[22],
            'capacidades_excepcionales' => $row[23],
            'discapacidades' => $row[24],
            'idiomas' => $row[25],
            'numero_sedes' => $row[26],
            'estado' => $row[27],
            'prestador_de_servicio' => $row[28],
            'propiedad_planta_fisica' => $row[29],
            'resguardo' => $row[30],
            'matricula_contratada' => $row[31],
            'calendario' => $row[32],
            'internado' => $row[33],
            'estrato' => $row[34],
            'correo_electronico' => $row[35],
            'cod_secretaria' => $row[36],
            'nombre_establecimiento_2' => $row[37],
            'sector_2' => $row[38],
            'web' => $row[39],
            'total_matricula' => $row[40],
            'cantidad_sedes' => $row[41],
            'grupo' => $row[42],
        ]);
    }
}
