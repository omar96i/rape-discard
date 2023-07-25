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

    public function get(Request $request)
    {
        $perPage = $request->input('per_page', 10); // Obtener el número de elementos por página (por defecto 10)
        $indicadores = Indicador::paginate($perPage);

        return response()->json(['status' => true, 'indicadores' => $indicadores]);
    }

    public function index(){
        return view('indicadores.index');
    }
}
