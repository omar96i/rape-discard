<?php

namespace App\Http\Controllers\Institucion;

use App\Exports\ExportInstitucion;
use App\Http\Controllers\Controller;
use App\Imports\ImportInstitucion;
use App\Models\Institucion;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InstitucionController extends Controller
{
    public function importExcel(Request $request){
        Excel::import(new ImportInstitucion, $request->file('file'));
        return response()->json(['status' => true]);
    }

    public function index(){
        return view('institucion.index');
    }

    public function get(){
        return response()->json(['status' => true, 'instituciones' => Institucion::get()]);
    }

    public function export(){
        return Excel::download(new ExportInstitucion, 'instituciones_educativas.xlsx');
    }
}
