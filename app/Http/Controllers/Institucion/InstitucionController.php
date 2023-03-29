<?php

namespace App\Http\Controllers\Institucion;

use App\Exports\ExportInstitucion;
use App\Http\Controllers\Controller;
use App\Imports\ImportEstablecimiento;
use App\Imports\ImportInstitucion;
use App\Models\Establecimiento;
use App\Models\Institucion;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InstitucionController extends Controller
{
    public function importExcel(Request $request){
        //Excel::import(new ImportEstablecimiento, $request->file('file'));
        //Excel::import(new ImportInstitucion, $request->file('file'));
        return response()->json(['status' => true]);
    }

    public function index(){
        return view('institucion.index');
    }

    public function get(){
        return response()->json(['status' => true, 'instituciones' => Institucion::get()]);
    }

    public function getEstablecimientos(){
        return response()->json(['status' => true, 'establecimientos' => Establecimiento::get()]);
    }

    public function getByFiltro(Establecimiento $establecimiento){
        return response()->json(['status' => true, 'establecimiento' => $establecimiento->load('instituciones')]);
    }

    public function export(){
        return Excel::download(new ExportInstitucion, 'instituciones_educativas.xlsx');
    }
}
