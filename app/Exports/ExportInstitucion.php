<?php

namespace App\Exports;

use App\Models\Institucion;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportInstitucion implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Institucion::all();
    }
}
