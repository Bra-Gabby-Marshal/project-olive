<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/favorites', [FavoriteController::class, 'index'])
    ->name('favorites.index');

Route::get('/favorites/create', [FavoriteController::class, 'create'])
    ->name('favorites.create');

Route::post('/favorites', [FavoriteController::class, 'store'])
    ->name('favorites.store');

Route::get('/favorites/{favorite}', [FavoriteController::class, 'show'])
    ->name('favorites.show');

Route::get('/favorites/{favorite}/edit', [FavoriteController::class, 'edit'])
    ->name('favorites.edit');

Route::put('/favorites/{favorite}', [FavoriteController::class, 'update'])
    ->name('favorites.update');

Route::delete('/favorites/{favorite}', [FavoriteController::class, 'destroy'])
    ->name('favorites.destroy');