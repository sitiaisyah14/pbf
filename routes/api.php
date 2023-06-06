<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
}); 

// Route::get('/greeting', function(){
//     return 'Hello world!';
// });

Route::get('products', [ProductsController::class, 'index'])->name('products.index');

Route::post('products', [ProductsController::class, 'store'])->name('products.store');

Route::get('products/{product}', [ProductsController::class, 'show'])->name('products.show');

Route::put('products/{product}', [ProductsController::class, 'update'])->name('products.update');

Route::delete('products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');