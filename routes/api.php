<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getAll',[TaskController::class,"fetchTasks"]);
Route::get('/getDoneTasks',[TaskController::class,"fetchDoneTasks"]);
Route::post('/add',[TaskController::class,"addTask"]);
Route::delete('/delete/{id}',[TaskController::class,"delete"]);
Route::post('/update/{id}',[TaskController::class,"update"]);
Route::post('/setStat/{id}',[TaskController::class,"setStat"]);

