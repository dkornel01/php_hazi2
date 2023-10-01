<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/tasks', [TaskController::class, 'index']);
Route::get('/api/tasks/{id}', [TaskController::class, 'show']);
Route::post('/api/tasks', [TaskController::class, 'store']);
Route::put('/api/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/api/tasks/{id}', [TaskController::class, 'destroy']);

Route::get('/api/users', [UserController::class, 'index']);

Route::get('/task/new', [TaskController::class, 'newView']);

Route::get('/task/edit/{id}', [TaskController::class, 'editView']);
Route::get('/task/list', [TaskController::class, 'listView']);

Route::get('/api/users', [UserController::class, 'index']);
Route::get('/api/users/{id}', [UserController::class, 'show']);
Route::post('/api/users', [UserController::class, 'store']);
Route::put('/api/users/{id}', [UserController::class, 'update']);

Route::delete('/api/users/{id}', [UserController::class, 'destroy']);

Route::get('/api/users', [UserController::class, 'index']);

Route::get('/task/new', [UserController::class, 'newView']);

Route::get('/task/edit/{id}', [UserController::class, 'editView']);
Route::get('/task/list', [UserController::class, 'listView']);

Route::get('/api/libary', [libaryController::class, 'index']);
Route::get('/api/libary/{id}', [libaryController::class, 'show']);
Route::post('/api/libary', [libaryController::class, 'store']);
Route::put('/api/libary/{id}', [libaryController::class, 'update']);

Route::delete('/api/libary/{id}', [libaryController::class, 'destroy']);

Route::get('/api/raktar', [raktarController::class, 'index']);

Route::get('/libary/new', [libaryController::class, 'newView']);

Route::get('/libary/edit/{id}', [libaryController::class, 'editView']);
Route::get('/libary/list', [libaryController::class, 'listView']);

Route::get('/api/raktar', [raktarController::class, 'index']);
Route::get('/api/raktar/{id}', [raktarController::class, 'show']);
Route::post('/api/raktar', [raktarController::class, 'store']);
Route::put('/api/raktar/{id}', [raktarController::class, 'update']);

Route::delete('/api/raktar/{id}', [raktarController::class, 'destroy']);

Route::get('/api/raktar', [raktarController::class, 'index']);

Route::get('/libary/new', [libaryController::class, 'newView']);

Route::get('/libary/edit/{id}', [libaryController::class, 'editView']);
Route::get('/libary/list', [libaryController::class, 'listView']);
//require __DIR__ . '/auth.php';
