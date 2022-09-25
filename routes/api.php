<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TodoController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::middleware('auth:sanctum')->group(function(){
    Route::prefix('todo')->group(function(){
        Route::get('/', [TodoController::class, 'getTodos']);
        Route::get('{id}', [TodoController::class, 'getTodo']);
        Route::post('/', [TodoController::class, 'createTodo']);
        Route::put('{id}', [TodoController::class, 'updateTodo']);
        Route::delete('{id}', [TodoController::class, 'deleteTodo']);
        Route::get('status/{x}', [TodoController::class, 'getStatus']);
    });
});
