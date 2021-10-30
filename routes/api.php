<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//nos devuelve todos los objetos
Route::get("/producto","App\Http\Controllers\ProductoController@index");

//devuelve el objeto por su id
Route::get("/producto/{id}","App\Http\Controllers\ProductoController@singleProduct");

//borrar producto por id
Route::delete("/producto/{id}","App\Http\Controllers\ProductoController@destroy");

//crea nuevo producto
Route::post("/producto","App\Http\Controllers\ProductoController@createSingleProduct");

//actualiza un producto segun su id
Route::put("/producto/{id}","App\Http\Controllers\ProductoController@update");

