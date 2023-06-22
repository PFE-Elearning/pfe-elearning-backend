<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('formation', FormationController::class);
Route::resource('blogs', BlogController::class);
Route::resource("users",UserController::class);
Route::resource('payments', PaymentController::class);
Route::resource('courses', CourseController::class);
