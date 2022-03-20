<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'add']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::get('', [TodoController::class, 'edit']);
Route::post('/edit', [TodoController::class, 'update']);
Route::get('/delete', [TodoController::class, 'delete']);
Route::post('/todo/delete', [TodoController::class, 'remove']);