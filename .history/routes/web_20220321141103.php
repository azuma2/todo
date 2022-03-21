<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'add']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::get('/todo/update', [TodoController::class, 'edit']);
Route::post('/todo/update', [TodoController::class, 'update']);

Route::post('/todo/delete', [TodoController::class, 'remove']);
Route::post('/', [TodoController::class, 'post']);


Route::post('/tod/delete', [TodoController::class, 'delete'])->name('todo.delete');