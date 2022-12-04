<?php

namespace App\Http\Controllers\Riesgo;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\MunicipioRiesgo;
use Illuminate\Http\Request;

class MunicipioRiesgoController extends Controller
{
    public function index(){
        return view('riesgos.index');
    }

    public function get(){
        return response()->json(['data' => MunicipioRiesgo::with('municipio.departamento')->get()]);
    }

    public function store(Request $request){
        $riesgo = new MunicipioRiesgo($request->all());
        $riesgo->save();
        return response()->json(['status' => true]);
    }

    public function update(MunicipioRiesgo $riesgo, Request $request){
        $riesgo->update($request->all());
        $riesgo->save();
        return response()->json(['status' => true]);
    }

    public function delete(MunicipioRiesgo $riesgo){
        $riesgo->delete();
        return response()->json(['status' => true]);
    }

    public function getData(MunicipioRiesgo $riesgo){
        return response()->json(['data' => $riesgo->load('municipio.departamento')]);
    }

    public function getByMunicipio($municipio, Request $request){
        return response()->json(['data' => MunicipioRiesgo::whereHas('municipio', function($query) use($municipio){
            $query->where('nombre', $municipio);
        })->with('municipio.departamento')->where('fecha', '>=', $request->inicio)->where('fecha', '<=', $request->fin)->get()->first()]);
    }

    public function getByDate(Request $request){
        return response()->json(['data' => MunicipioRiesgo::with('municipio.departamento')->where('fecha', '>=', $request->inicio)->where('fecha', '<=', $request->fin)->get()]);
    }

    public function getMunicipioByDepartamento(Departamento $departamento){
        return response()->json(['data' => Municipio::where('departamento_id', $departamento->id)->get()]);
    }
}
