<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

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

// animal method get
Route:: get('/animals', [AnimalController::class, 'index']);

// animal method post
Route:: get('/animals', [AnimalController::class, 'store']);

// animal method put
Route:: get('/animals/{id}', [AnimalController::class, 'update']);

// animal method delete
Route:: get('/animals/{id}', [AnimalController::class, 'destroy']);

// studentcontroller
// route untuk menapilkan mahasisawa all
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
