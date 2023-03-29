<?php

namespace App\Http\Controllers\Institucion;

use App\Http\Controllers\Controller;
use App\Models\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function store(Request $request){
        $establecimiento = new Establecimiento($request->all());
        $establecimiento->save();
        return response()->json(['status' => true, 'establecimiento' => $establecimiento]);
    }

    public function update(Establecimiento $establecimiento, Request $request){
        $establecimiento->update($request->all());
        $establecimiento->save();
        return response()->json(['status' => true, 'establecimiento' => $establecimiento]);
    }

    public function delete(Establecimiento $establecimiento){
        $establecimiento->delete();
        return response()->json(['status' => true]);
    }

    public function getById(Establecimiento $establecimiento){
        return response()->json(['status' => true, 'establecimiento' => $establecimiento]);
    }
}
