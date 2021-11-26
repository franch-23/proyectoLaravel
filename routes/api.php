<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use APP\Http\Middleware\Aseguraridnumerico;
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

Route::get('error',function (Request $request){
    return response()->json(['messge'=>'esto es un error'],400);
});

Route::prefix("alumno")->group(function () {

    Route::get('/', [\App\Http\Controllers\AlumnoController::class, 'getAll']);
    Route::post('/', [AlumnoController::class, 'insert']);

    Route::middleware(\App\Http\Middleware\asegurarId::class)->group(function () {
        Route::get('/{id}', [AlumnoController::class, 'getAlumno']);
        Route::delete("/{id}",[AlumnoController::class, 'delete']);
        Route::patch("/{id}",[AlumnoController::class, 'update']);
    });

});

