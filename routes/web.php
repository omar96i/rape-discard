<?php

use App\Http\Controllers\Abastecimiento\AbastecimientoController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\OfertaTurista\OfertaTuristicaController;
use App\Http\Controllers\Riesgo\MunicipioRiesgoController;
use App\Models\Alimento;
use App\Models\Departamento;
use App\Models\Proyect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    return view('pruebas');
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('ofertas-turisticas')->controller(OfertaTuristicaController::class)->group(function () {
        Route::get('/', 'index')->name('oferta.turistica.index');
        Route::get('/get', 'get')->name('oferta.turistica.get');
        Route::get('/get/departamento/{departamento}', 'getCounts')->name('oferta.turistica.get.departamento');
        Route::post('/get/por/departamento/{departamento}/{inicio}/{fin}', 'getByDepart')->name('oferta.turistica.get.por.departamento');
        Route::get('/getData/{proyect}', 'getData')->name('oferta.turistica.get.data');
        Route::post('/store', 'store')->name('oferta.turistica.store');
        Route::post('/update/{proyect}', 'update')->name('oferta.turistica.update');
        Route::get('/delete/{proyect}', 'delete')->name('oferta.turistica.delete');
    });

    Route::prefix('map')->controller(MapController::class)->group(function () {
        Route::get('/', 'index')->name('map.index');
    });

    Route::prefix('abastecimiento')->controller(AbastecimientoController::class)->group(function () {
        Route::get('/', 'index')->name('abastecimiento.index');
        Route::get('/get', 'get')->name('abastecimiento.get');
        Route::get('/get/data/by/departamento/{departamento}', 'getByDepartamento')->name('abastecimiento.get');
        Route::post('/get/data/by/categoria', 'getByCategoria')->name('abastecimiento.get.data.by.categoria');
        Route::post('/get/data/by/filtros/{departamento}', 'getByFiltros')->name('abastecimiento.get.data.by.filtros');
        Route::get('/get/data/{departamento}/{alimento}', 'findDepartById')->name('abastecimiento.get.data');
        Route::post('/store/{departamento}/{alimento}', 'store')->name('abastecimiento.store');
        Route::post('/update/{departamento}/{alimento}', 'update')->name('abastecimiento.update');
        Route::get('/delete/{departamento}/{alimento}', 'delete')->name('abastecimiento.delete');
        Route::get('/get/alimentos/{categoria}', 'getAlimentos')->name('abastecimiento.get.alimentos');
    });

    Route::prefix('riesgo')->controller(MunicipioRiesgoController::class)->group(function () {
        Route::get('/', 'index')->name('riesgo.index');
        Route::get('/get', 'get')->name('riesgo.get');
        Route::post('/get/by/date', 'getByDate')->name('riesgo.get.by.date');
        Route::post('/get/by/municipio/{municipio}', 'getByMunicipio')->name('riesgo.get.by.municipio');
        Route::get('/delete/{riesgo}', 'delete')->name('riesgo.delete');
        Route::get('/get/data/{riesgo}', 'getData')->name('riesgo.get.data');
        Route::get('/get/municipios/{departamento}', 'getMunicipioByDepartamento')->name('riesgo.get.municipios');
        Route::post('/store', 'store')->name('riesgo.store');
        Route::post('/update/{riesgo}', 'update')->name('riesgo.update');
    });

});
