<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
    Route::post('/refresh',[AuthController::class, 'refresh'])->name('refresh');
    Route::post('/me',[AuthController::class, 'me'])->name('me');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'books'
], function ($router) {
    Route::get('/',[BookController::class, 'index'])->name('books');
    Route::post('/',[BookController::class, 'store'])->name('storeBook');
    Route::get('/{book}',[BookController::class, 'show'])->name('showBook');
    Route::put('/{book}',[BookController::class, 'update'])->name('updateBook');
    Route::delete('/{book}',[BookController::class, 'destroy'])->name('destroyBook');
});