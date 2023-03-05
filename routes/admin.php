use App\Http\Controllers\admin\CarritoController;

//Rutas del carrito

Route::post('/agrega_carrito', [CarritoController::class,'add'])->name('agrega.carrito');
Route::get('/checar_carrito', [CarritoController::class,'show'])->name('checar.carrito');
Route::post('/limpia_carrito', [CarritoController::class,'clear'])->name('limpia.carrito');
Route::post('/eliminar.carrito', [CarritoController::class,'removeitem'])->name('eliminar.carrito');