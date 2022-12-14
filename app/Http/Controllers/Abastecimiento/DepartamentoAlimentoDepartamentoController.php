<?php

namespace App\Http\Controllers\Abastecimiento;

use App\Http\Controllers\Controller;
use App\Models\Alimento;
use App\Models\AlimentoDepartamento;
use App\Models\Departamento;
use App\Models\DepartamentoAlimentoDepartamento;
use Illuminate\Http\Request;

class DepartamentoAlimentoDepartamentoController extends Controller
{
    public function get(){
        return response()->json(['data' => DepartamentoAlimentoDepartamento::with('departamento', 'alimento.departamento', 'alimento.alimento')->get()]);
    }

    public function store(Request $request){
        $relacion = new DepartamentoAlimentoDepartamento($request->all());
        $relacion->save();
        return response()->json(['status' => true]);
    }

    public function update(DepartamentoAlimentoDepartamento $relacion, Request $request){
        $relacion->update($request->all());
        $relacion->save();
        return response()->json(['status' => true]);
    }

    public function delete(DepartamentoAlimentoDepartamento $relacion){
        $relacion->delete();
        return response()->json(['status' => true]);
    }

    public function findByDepartamento(Departamento $departamento){
        return response()->json(['data' => DepartamentoAlimentoDepartamento::whereHas('departamento', function($query) use($departamento){
            $query->where('id', $departamento->id);
        })->with('departamento', 'alimento.departamento'. 'alimento.alimento')->get()]);
    }

    public function getByFiltros($departamento, Request $request){
        if(!empty($request->departamento_id)){
            $consulta = DepartamentoAlimentoDepartamento::whereHas('alimento', function($query) use($request){
                $query->where('departamento_id', $request->departamento_id);
            })->whereHas('alimento.alimento', function($query) use($request){
                $query->where('categoria', 'like', '%'.$request->categoria)->where('nombre', 'like', '%'.$request->nombre.'%');
            })->whereHas('departamento', function($query) use($departamento){
                $query->where('nombre', $departamento);
            })->where('fecha', '>=', $request->fecha_inicio)->where('fecha', '<=', $request->fecha_final)->with('alimento.alimento')->get();
            return response()->json(['data' => $consulta, 'status' => 'find_departamento']);
        }else{
            $departamentos = Departamento::select('nombre')->get();
            $departamentos_alimentos = [];
            $departamentos_count = [];
            foreach ($departamentos as $key => $value) {
                $contador = DepartamentoAlimentoDepartamento::whereHas('alimento.departamento', function($query) use($value){
                    $query->where('nombre', $value->nombre);
                })->whereHas('alimento.alimento', function($query) use($request){
                    $query->where('nombre', 'like', '%'.$request->nombre.'%')->where('categoria', 'like', '%'.$request->categoria.'%');
                })->whereHas('departamento', function($query) use($departamento){
                    $query->where('nombre', $departamento);
                })->count();
                if($contador > 0){
                    array_push($departamentos_alimentos, $value->nombre);
                    array_push($departamentos_count, $contador);
                }
            }
            return response()->json(['header' => $departamentos_alimentos, 'data' => $departamentos_count, 'status' => 'find_sin_departamento']);
        }

    }

    public function getByCategoriaDepartamento($categoria,Departamento $departamento){
        return response()->json(['data' => AlimentoDepartamento::whereHas('alimento', function($query) use($categoria){
            $query->where('categoria', $categoria);
        })->where('departamento_id', $departamento->id)->with('alimento')->get()]);
    }

    public function getData(DepartamentoAlimentoDepartamento $relacion){
        return response()->json(['data' => $relacion->load('alimento.alimento', 'alimento.departamento', 'departamento')]);
    }
}
