<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\ProductController;
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

Route::get('/', Homecontroller::class)->name('home');
Route:: resource('cursos',CursoController::class);
/*route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.craete');

Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{id}',[CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{id}/edit',[CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');

Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenodo al curso:$curso";
    }
});*/
// Rutas de los productos


//Rutas de la tabla product
Route::resource('products', ProductController::class);
Route::resource('productos', ProductoController::class);
/*Route::get('productos', [ProductoController::class,'index']) ->name('productos.index');
Route::get('productos/crear', [ProductoController::class,'crear']) ->name('productos.crear');
Route::get('productos/editar{id}', [ProductoController::class,'edit']) ->name('productos.editar');
Route::post('productos',[CursoController::class, 'store'])->name('productos.store');*/