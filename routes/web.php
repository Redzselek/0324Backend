<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/tasks', [TaskController::class, 'index']);
Route::get('/api/tasks/{id}', [TaskController::class, 'show']);
Route::post('/api/tasks', [TaskController::class, 'store']);
Route::put('/api/tasks/{id}', [TaskController::class, 'update']);
Route::patch('/api/tasks/{id}/status', [TaskController::class, 'updateStatus']);
Route::delete('/api/tasks/{id}', [TaskController::class, 'destroy']);
