<?php

use App\Http\Controllers\{SeriesController, UsersController, MoviesController};
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(SeriesController::class)->group(function () {
    Route::get('/series', 'index')->middleware('auth');
    Route::get('/series/create', 'create')->middleware('auth');
    Route::post('/series', 'store')->middleware('auth');
});

Route::controller(MoviesController::class)->group(function () {
    Route::get('/filmes', 'index')->middleware('auth');
    Route::get('/filmes/create', 'create')->middleware('auth');
    Route::post('/filmes', 'store')->middleware('auth');
});

Route::get('/dashboard', [UsersController::class, 'index']);
