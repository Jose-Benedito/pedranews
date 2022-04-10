<?php

use Illuminate\Support\Facades\Route;

// Importanção da classe controler
use App\Http\Controllers\PaginasController;

Route::get('/', [PaginasController::class, 'index']);
Route::get('/sobre', [PaginasController::class, 'sobre']);
Route::get('/postagem', [PaginasController::class, 'postagem']);
Route::get('/postagens/{id?}', [PaginasController::class, 'postagens']);
Route::get('/videoaula', [PaginasController::class, 'videoaula']);
Route::get('/videopost', [PaginasController::class, 'videopost']);
Route::post('/posts', [PaginasController::class, 'store']);
Route::post('/videos', [PaginasController::class, 'store_video']);

/*Route::get('/', function () {
    return view('sobre');
});*/
