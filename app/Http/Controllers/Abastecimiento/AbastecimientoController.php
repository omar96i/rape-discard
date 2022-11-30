<?php

namespace App\Http\Controllers\Abastecimiento;

use App\Http\Controllers\Controller;
use App\Models\Alimento;
use App\Models\Departamento;
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
        return response()->json(['data' => Departamento::with('alimentos')->get()]);
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
    public function findDepartById(Departamento $departamento){
        return response()->json(['data' => $departamento->load('alimentos')]);
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
        $alimento->departamentos()->attach($departamento->id, $request->all());
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
}
