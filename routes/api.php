<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

Route::post('/login', [AuthController::class, 'apiLogin']);
Route::post('/register', [AuthController::class, 'apiRegister']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'apiLogout']);
Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']);

Route::get('/post', [PostController::class, 'apiIndex']);
Route::get('/post/{id}', [PostController::class, 'apiPost']);
Route::post('/post/store', [PostController::class, 'apiStore']);
Route::post('/post/update/{id}', [PostController::class, 'apiUpdate']);
Route::post('/post/delete/{id}', [PostController::class, 'apiDestroy']);

Route::get('/user', [UserController::class, 'apiIndex']);
Route::get('/user/{id}', [UserController::class, 'apiUser']);
Route::post('/user/store', [UserController::class, 'apiStore']);
Route::post('/user/update/{id}', [UserController::class, 'apiUpdate']);
Route::post('/user/delete/{id}', [UserController::class, 'apiDestroy']);

Route::get('/category', [CategoryController::class, 'apiIndex']);
Route::get('/category/{id}', [CategoryController::class, 'apiCategory']);
Route::post('/category/store', [CategoryController::class, 'apiStore']);
Route::post('/category/update/{id}', [CategoryController::class, 'apiUpdate']);
Route::post('/category/delete/{id}', [CategoryController::class, 'apiDestroy']);
