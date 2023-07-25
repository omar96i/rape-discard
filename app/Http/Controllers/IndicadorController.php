<?php

namespace App\Http\Controllers;

use App\Imports\ImportIndicador;
use App\Models\Indicador;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class IndicadorController extends Controller
{
    public function importExcel(Request $request){
        Excel::import(new ImportIndicador, $request->file('file'));
        //Excel::import(new ImportInstitucion, $request->file('file'));
        return response()->json(['status' => true]);
    }

    public function get(){
        return response()->json(['status' => true, 'indicadores' => Indicador::get()]);
    }

    public function index(){
        return view('indicadores.index');
    }
}
