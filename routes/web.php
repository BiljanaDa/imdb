<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);

Route::get('/createmovie', [MoviesController::class, 'showCreateMovie']);
Route::post('/createmovie', [MoviesController::class, 'store']);

Route::post('/createcomment', [CommentController::class, 'store']);

Route::get('/genres/{name}', [GenreController::class, 'show']);