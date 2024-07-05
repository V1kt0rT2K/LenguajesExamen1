<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DirectorioController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[DirectorioController::class, 'mostrar'])->name('directorios.mostrar');
Route::get('/directorios/crear',[DirectorioController::class, 'crear'])->name('directorios.crear');
Route::post('/directorios/crear/guardar',[DirectorioController::class, 'guardar'])->name('directorios.crear.guardar');
Route::get('/directorios/eliminar/{codigoEntrada}',[DirectorioController::class, 'eliminar'])->name('directorios.eliminar');
Route::get('/directorios/eliminar/confirmar/{codigoEntrada}',[DirectorioController::class, 'confirmar'])->name('directorios.eliminar.confirmar');
Route::get('/directorios/buscar',[DirectorioController::class,'buscar'])->name('directorios.buscar');

//Rutas del controlador de contactos

Route::get('/contactos/mostrar/{codigoEntrada}',[ContactoController::class, 'mostrar'])->name('contactos.mostrar');
Route::post('/contactos/buscar',[ContactoController::class, 'buscar'])->name('contactos.buscar');
Route::get('/contactos/crear/{codigoEntrada}', [ContactoController::class, 'crear'])->name('contactos.crear');
Route::post('/contactos/guardar',[ContactoController::class, 'guardar'])->name('contactos.guardar');
Route::get('/contactos/eliminar/{contactoId}',[ContactoController::class, 'eliminar'])->name('contactos.eliminar');