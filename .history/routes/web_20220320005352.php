<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/add', [TodoController::class, 'add']);
Route::post('/add', [TodoController::class, 'create']);
Route::get('/edit', [Controller::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);