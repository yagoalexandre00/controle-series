<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
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

Route::get('/dashboard', [UsersController::class, 'index']);
