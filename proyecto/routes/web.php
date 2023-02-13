<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatAccesosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\PDFController;

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
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::group(['namespace'=>'admin', 'middleware' => 'val_acceso'],function(){

  
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('accesos',[CatAccesosController::class,'index'])->name('accesos.index');
    Route::get('create',[CatAccesosController::class,'create'])->name('accesos.create');
    Route::post('acceso', [CatAccesosController::class,'store'])->name('accesos.store');
    Route::get('acceso/{acceso}', [CatAccesosController::class,'show'])->name('accesos.show');
    Route::put('acceso/{acceso}', [CatAccesosController::class,'update'])->name('accesos.update');
    Route::get('acceso/{acceso}/inactivar', [CatAccesosController::class,'inactivar'])->name('accesos.inactivar');
    Route::get('acceso/{acceso}/activar', [CatAccesosController::class,'activar'])->name('accesos.activar');

    Route::get('usuarios',[UserController::class,'index'])->name('usuarios.index');
    Route::get('usuarios/perfil',[UserController::class,'perfil'])->name('usuarios.perfil');
    Route::get('usuarios/inactivar/{usuario}', [UserController::class,'inactivar'])->name('usuarios.inactivar');
    Route::get('usuarios/{usuario}', [UserController::class,'activar'])->name('usuarios.activar');
    Route::post('usuarios/custom', [UserController::class,'custom'])->name('usuarios.custom');
    Route::post('editar/{usuario}', [UserController::class,'store'])->name('usuarios.store');
    Route::get('show/{usuario}', [UserController::class,'show'])->name('usuarios.show');
    Route::get('create/usuarios/usuario', [UserController::class,'create'])->name('usuarios.create');
    Route::get('area/usuarios/usuario', [UserController::class,'area'])->name('usuarios.area');
    Route::post('usuarios/update/{usuario}', [UserController::class,'update'])->name('usuarios.update');
    Route::post('usuarios/update2/{usuario}', [UserController::class,'update_area'])->name('usuarios.update2');

    Route::get('familiar/agregar',[SolicitudesController::class,'familiar'])->name('solicitud.familiar');
    Route::get('solicitud',[SolicitudesController::class,'create'])->name('solicitud.create');
    Route::post('solicitud/guardar',[SolicitudesController::class,'store'])->name('solicitud.store');
    Route::get('solicitud/cps',[SolicitudesController::class,'cargar_cp'])->name('cargar.cp');
    Route::post('/solicitud/municipio',[SolicitudesController::class,'cargar_localidad'])->name('cargar.localidad');
    Route::post('/actualizar/cp',[SolicitudesController::class,'cambiar_cp'])->name('cambiar.cp');

    Route::get('documento/ejemplo/{beneficiario}',[PDFController::class,'createPDF'])->name('pdf');
});