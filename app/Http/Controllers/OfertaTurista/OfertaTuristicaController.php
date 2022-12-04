<?php

namespace App\Http\Controllers\OfertaTurista;

use App\Http\Controllers\Controller;
use App\Models\Proyect;
use Illuminate\Http\Request;

class OfertaTuristicaController extends Controller
{
    public function index(){
        return view('ofertasTuristicas.index');
    }

    public function store(Request $request){
        $proyect = new Proyect($request->all());

        if($request->file('logo')){
            $file= $request->file('logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/logo'), $filename);
            $proyect->logo = $filename;
        }

        if($request->file('foto_portada')){
            $file= $request->file('foto_portada');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/portada'), $filename);
            $proyect->foto_portada = $filename;
        }

        $proyect->save();
        return response()->json(['status' => true, 'proyect' => $proyect]);
    }

    public function update(Proyect $proyect, Request $request){
        $proyect->update($request->all());

        if($request->file('logo')){
            $file= $request->file('logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/logo'), $filename);
            $proyect->logo = $filename;
        }

        if($request->file('foto_portada')){
            $file= $request->file('foto_portada');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/portada'), $filename);
            $proyect->foto_portada = $filename;
        }

        $proyect->save();

        return response()->json(['status' => true, 'proyect' => $proyect]);
    }

    public function delete(Proyect $proyect){
        $proyect->delete();
        return response()->json(['status' => true]);
    }

    public function get(){
        return response()->json(['proyects' => Proyect::get()]);
    }

    public function getData(Proyect $proyect){
        return response()->json(['proyect' => $proyect]);
    }

    public function getByDepart($departamento, $inicio, $fin, Request $request){
        $datos = Proyect::where(function ($query) use($departamento){
            $query->where('departamento', $departamento);
        })->where(function ($query) use($request){
            $query->where('nombre', 'like', '%'.$request->nombre.'%')
            ->where('tipo_de_turismo', 'like', '%'.$request->tipo_de_turismo.'%')
            ->where('estado', 'like', '%'.$request->estado.'%')
            ->where('rnt', 'like', '%'.$request->rnt.'%');
        })->skip($inicio)->take($fin)->get();
        return response()->json(['status' => true, 'data' => $datos]);
    }

    public function getCounts($departamento){
        $datos['turismo_verde'] = Proyect::where('tipo_de_turismo', 'turismo verde y experiencias')->where('departamento', $departamento)->count();
        $datos['aventura'] = Proyect::where('tipo_de_turismo', 'aventura')->where('departamento', $departamento)->count();
        $datos['atractivo_turistico'] = Proyect::where('tipo_de_turismo', 'atractivo turistico')->where('departamento', $departamento)->count();
        $datos['hospedaje'] = Proyect::where('tipo_de_turismo', 'hospedaje')->where('departamento', $departamento)->count();
        $datos['estado_true'] = Proyect::where('estado', 'activo')->where('departamento', $departamento)->count();
        $datos['estado_false'] = Proyect::where('estado', 'inactivo')->where('departamento', $departamento)->count();

        return response()->json(['data' => $datos]);
    }
}
