<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\VisiteController;
use App\Http\Controllers\TypeController;


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



Route::get('personne',[PersonneController::class,'index']);
Route::post('personne',[PersonneController::class,'store']);
/*
Route::get('personne/{id}',[PersonneController::class,'show']);
Route::put('personne/{id}',[PersonneController::class,'update']);
Route::delete('personne/{id}',[PersonneController::class,'destroy']);
*/

Route::get('type',[TypeController::class,'index']);
Route::post('type',[TypeController::class,'store']);
/*
Route::get('type/{id}',[TypeController::class,'show']);
Route::put('type/{id}',[TypeController::class,'update']);
Route::delete('type/{id}',[TypeController::class,'destroy']);
*/

Route::get('visite',[visiteController::class,'index']);
Route::post('visite',[visiteController::class,'store']);
/*
Route::get('visite/{id}',[TypeController::class,'show']);
Route::get('visite/{id}',[TypeController::class,'update']);
Route::get('visite/{id}',[TypeController::class,'destroy']);
*/

Route::get('user',[userController::class,'index']);
Route::post('user',[userController::class,'store']);
