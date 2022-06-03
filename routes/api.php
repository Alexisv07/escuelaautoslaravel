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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/escuela','App\Http\Controllers\EscuelaController@index');//mostrar todos los registros
Route::post('/escuela','App\Http\Controllers\EscuelaController@store');//crear registros
Route::put('/escuela/{id}','App\Http\Controllers\EscuelaController@update');//actualizar registros
Route::delete('/escuela/{id}','App\Http\Controllers\EscuelaController@destroy');//actualizar registros
