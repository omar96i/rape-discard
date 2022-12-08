<?php

namespace App\Http\Controllers\Abastecimiento;

use App\Http\Controllers\Controller;
use App\Models\Alimento;
use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Http\Request;

class AbastecimientoController extends Controller
{
    /**
     * funcion sin documentar
     * @return view
    */
    public function index(){
        return view('abastecimiento.index');
    }

    /**
     * Obtener registros
     * @return JSON
    */
    public function get(){
        return response()->json(['data' => Alimento::with('departamentos')->has('departamentos')->get()]);
    }

    /**
     * Obtener registros x categoria
     * @param $departamento
     * @return JSON
    */
    public function getAlimentos($categoria){
        return response()->json(['alimentos' => Alimento::where('categoria', $categoria)->get()]);
    }

    /**
     * Obtener registros x departamento
     * @param $departamento
     * @return JSON
    */
    public function findByDepart($departamento){
        return response()->json(['data' => Departamento::with('alimentos')->where('name', $departamento)->get()]);
    }

    /**
     * Obtener registros x alimento
     * @param $alimento
     * @return JSON
    */
    public function findByAliment($alimento){
        return response()->json(['data' => Departamento::whereHas('alimentos', function($query) use($alimento){
            $query->where('name', $alimento);
        })->with('alimentos')->get()]);
    }

    /**
     * Obtener departamento x id
     * @param Departamento $departamento
     * @return JSON
    */
    public function findDepartById(Departamento $departamento, Alimento $alimento){
        return response()->json(['data' => $departamento->alimentos()->wherePivot('alimento_id', $alimento->id)->get()->first()]);
    }

    /**
     * Obtener Alimento x id
     * @param Alimento $alimento
     * @return JSON
    */
    public function findAlimentById(Alimento $alimento){
        return response()->json(['data' => $alimento->load('departamento')]);
    }

    /**
     * Store en pivot table
     * @param Departamento $departamento
     * @param Alimento $alimento
     * @param Request $request
     * @return JSON
    */
    public function store(Departamento $departamento, Alimento $alimento, Request $request){
        if(count($departamento->alimentos()->wherePivot('alimento_id', $alimento->id)->get()) > 0){
            $alimento->departamentos()->sync([$departamento->id => $request->all()]);
        }else{
            $alimento->departamentos()->attach($departamento->id, $request->all());
        }
        return response()->json(['status' => true]);
    }

    /**
     * Update en pivot table
     * @param Departamento $departamento
     * @param Alimento $alimento
     * @param Request $request
     * @return JSON
    */
    public function update(Departamento $departamento, Alimento $alimento, Request $request){
        $alimento->departamentos()->sync([$departamento->id => $request->all()]);
        return response()->json(['status' => true]);
    }

    /**
     * Delete en pivot table
     * @param Departamento $departamento
     * @param Alimento $alimento
     * @return JSON
    */
    public function delete(Departamento $departamento, Alimento $alimento){
        $alimento->departamentos()->detach($departamento->id);
        return response()->json(['status' => true]);
    }

    public function getByCategoria(Request $request){
        $alimentos = Alimento::where('categoria', $request->categoria)->get()->toArray();
        return response()->json(['alimentos' => $alimentos]);
    }

    public function getByDepartamento($departamento){
        $alimentos = Departamento::with('alimentos')->where('nombre', $departamento)->get()->first();
        return response()->json(['departamento' => $alimentos]);
    }

    public function getByFiltros($departamento, Request $request){
        if($departamento == 'caldas'){
            $departamento = 4;
        }else if($departamento == 'risaralda'){
            $departamento = 1;
        }else if($departamento == 'quindio'){
            $departamento = 2;
        }else if($departamento == 'tolima'){
            $departamento = 3;
        }
        $alimentos_2 = [];
        $alimentos_3 = [];
        $alimentos = Alimento::where('nombre', 'like', '%'.$request->nombre.'%')->where('categoria', 'like', '%'.$request->categoria.'%')->get();
        if(count($alimentos) > 0){
            foreach ($alimentos as $key => $alimento) {
                $aux = $alimento->departamentos()->where('departamento_id', $departamento)->get()->first();
                if(!is_null($aux)){
                    array_push($alimentos_2, $aux);
                    array_push($alimentos_3, $alimento);
                }

            }
        }
        return response()->json(['cantidad' => $alimentos_2, 'alimento' => $alimentos_3]);
    }
}
