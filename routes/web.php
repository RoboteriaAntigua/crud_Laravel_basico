<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ProductosController::class)->group(function(){
    Route::get('/', 'index')                        ->name('productos.index');
    Route::get('productos/create','create')          ->name('productos.create');
    Route::get('productos/{id}','show')              ->name('productos.show');
    Route::post('productos/create/store','store')    ->name('productos.store');
    Route::get('productos/edit/{id}','edit')         ->name('productos.edit');
    Route::put('productos/{id}','update')            ->name('productos.update');
    Route::put('productos/delete/{id}','destroy')        ->name('productos.destroy');
});
