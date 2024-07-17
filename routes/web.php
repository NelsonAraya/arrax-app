<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfpController;
use App\Http\Controllers\BancoController;
use App\Http\Controllers\CentroCostoController;
use App\Http\Controllers\CuentaPresupuestariaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\EstadoUsuarioController;
use App\Http\Controllers\EstadoDocumentoController;
use App\Http\Controllers\FondoController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\MonedaValorController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/afps/all',[AfpController::class,'showAll'])
	->name('afps.all');
    Route::get('/bancos/all',[BancoController::class,'showAll'])
	->name('bancos.all');
    Route::get('/bancos/all2',[BancoController::class,'showAll2'])
	->name('bancos.all2');
    Route::get('/dpto/all',[DepartamentoController::class,'showAll'])
	->name('dpto.all');
    Route::get('/est/all',[EstadoUsuarioController::class,'showAll'])
	->name('est.all');
    Route::get('/est_doc/all',[EstadoDocumentoController::class,'showAll'])
	->name('est_doc.all');
    Route::get('/monedas/all',[MonedaController::class,'showAll'])
	->name('monedas.all');
    Route::get('/monedasValor/all',[MonedaValorController::class,'showAll'])
	->name('monedasValor.all');
    Route::get('/bancos/cuentas',[BancoController::class,'indexCuenta'])
	->name('bancos.cuentas');
    Route::get('/bancos/cuentas/create',[BancoController::class,'createCuenta'])
	->name('bancos.createCuenta');
    Route::post('/bancos/cuentas',[BancoController::class,'storeCuenta'])
	->name('bancos.storeCuenta');
    Route::resource('afps',AfpController::class);
    Route::resource('bancos',BancoController::class);
    Route::resource('dpto',DepartamentoController::class);
    Route::resource('est',EstadoUsuarioController::class);
    Route::resource('est_doc',EstadoDocumentoController::class);
    Route::resource('monedas',MonedaController::class);
    Route::resource('monedasValor',MonedaValorController::class);
});

Route::prefix('finanzas')->group(function () {
    Route::get('/ccosto/all',[CentroCostoController::class,'showAll'])
	->name('ccosto.all');
    Route::get('/cuentap/all',[CuentaPresupuestariaController::class,'showAll'])
	->name('cuentap.all');
    Route::get('/tipo_doc/all',[TipoDocumentoController::class,'showAll'])
	->name('tipo_doc.all');
    Route::get('/fondos/all',[FondoController::class,'showAll'])
	->name('fondos.all');
    Route::get('/proveedores/all',[ProveedoresController::class,'showAll'])
	->name('proveedores.all');
    Route::resource('ccosto',CentroCostoController::class);
    Route::resource('cuentap',CuentaPresupuestariaController::class);
    Route::resource('tipo_doc',TipoDocumentoController::class);
    Route::resource('fondos',FondoController::class);
    Route::resource('proveedores',ProveedoresController::class);
});
