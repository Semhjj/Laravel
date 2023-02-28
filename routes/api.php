<?php

use App\Http\Controllers\Api\KlaarController;
use App\Http\Controllers\Api\meeBezigController;
use App\Http\Controllers\Api\nog_een_keer_naar_kijkenController;
use App\Http\Controllers\Api\toDoController;
use App\Http\Controllers\indexcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//mee bezig pagina
Route::get('mee_bezig', [meeBezigController::class, 'index']);
Route::post('mee_bezig', [meeBezigController::class, 'store']);
Route::get('mee_bezig/{id}', [meeBezigController::class, 'show']);
Route::get('mee_bezig/{id}/edit', [meeBezigController::class, 'edit']);
Route::put('mee_bezig/{id}/update', [meeBezigController::class, 'update']);
Route::delete('/mee_bezig/{id}/delete', [meeBezigController::class, 'destroy']);

//to do pagina
Route::get('to_do', [toDoController::class, 'index']);
Route::post('to_do', [toDoController::class, 'store']);
Route::get('to_do/{id}', [toDoController::class, 'show']);
Route::get('to_do/{id}/edit', [toDoController::class, 'edit']);
Route::put('to_do/{id}/update', [toDoController::class, 'update']);
Route::delete('/mee_bezig/{id}/delete', [toDoController::class, 'destroy']);

//Klaar pagina
Route::get('klaar', [KlaarController::class, 'index']);
Route::post('klaar', [KlaarController::class, 'store']);
Route::get('klaar/{id}', [KlaarController::class, 'show']);
Route::get('klaar/{id}/edit', [KlaarController::class, 'edit']);
Route::put('klaar/{id}/update', [KlaarController::class, 'update']);
Route::delete('/klaar/{id}/delete', [KlaarController::class, 'destroy']);

//Nog een keer naar kijken pagina
Route::get('nog_kijken', [nog_een_keer_naar_kijkenController::class, 'index']);
Route::post('nog_kijken', [nog_een_keer_naar_kijkenController::class, 'store']);
Route::get('nog_kijken/{id}', [nog_een_keer_naar_kijkenController::class, 'show']);
Route::get('nog_kijken/{id}/edit', [nog_een_keer_naar_kijkenController::class, 'edit']);
Route::put('nog_kijken/{id}/update', [nog_een_keer_naar_kijkenController::class, 'update']);
Route::delete('/nog_kijken/{id}/delete', [nog_een_keer_naar_kijkenController::class, 'destroy']);
