<?php

use App\Http\Controllers\MapController;
use App\Http\Controllers\OfertaTurista\OfertaTuristicaController;
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
    Auth::logout();
    return auth()->user();
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('ofertas-turisticas')->controller(OfertaTuristicaController::class)->group(function () {
        Route::get('/', 'index')->name('oferta.turistica.index');
        Route::get('/get', 'get')->name('oferta.turistica.get');
        Route::get('/getData/{proyect}', 'getData')->name('oferta.turistica.get.data');
        Route::post('/store', 'store')->name('oferta.turistica.store');
        Route::post('/update/{proyect}', 'update')->name('oferta.turistica.update');
        Route::get('/delete/{proyect}', 'delete')->name('oferta.turistica.delete');
    });

    Route::prefix('map')->controller(MapController::class)->group(function () {
        Route::get('/', 'index')->name('map.index');
    });

});
