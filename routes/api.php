<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::controller(TodoController::class)->group(function(){
    Route::prefix('todo')->group(function(){
        Route::get('/', 'getTodos');
        Route::get('{id}', 'getTodo');
        Route::post('/', 'createTodo');
        Route::put('{id}', 'updateTodo');
        Route::delete('{id}', 'deleteTodo');
        Route::get('status/{x}', 'getStatus');
    });
});
