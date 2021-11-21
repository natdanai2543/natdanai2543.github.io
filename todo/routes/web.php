<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\TodoController::class, 'index']);
Route::get('/todo.create', [App\Http\Controllers\TodoController::class, 'create']);
Route::post('/todo.store', [App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todo.edit/{id}', [App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/todo.update', [App\Http\Controllers\TodoController::class, 'update']);
Route::post('/todo.delete', [App\Http\Controllers\TodoController::class, 'delete']);