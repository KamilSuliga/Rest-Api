<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::get('kamilsuliga/305405/people', [PeopleController::class, 'index']);
Route::get('kamilsuliga/305405/people/{people}', [PeopleController::class, 'show']);
Route::delete('kamilsuliga/305405/people/{people}', [PeopleController::class, 'delete']);
Route::post('kamilsuliga/305405/people/{people}', [PeopleController::class, 'create']);
Route::put('kamilsuliga/305405/people/{people}', [PeopleController::class, 'update']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});