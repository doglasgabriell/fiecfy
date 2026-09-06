<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MusicaController;
use App\Http\Controllers\PlaylistController;

// ===================================================================================
// ROTA DE PLAYLISTS
// ===================================================================================
Route::prefix('playlists')->group(function() {
    Route::post('/', [PlaylistController::class, 'store']);
    Route::get('/', [PlaylistController::class, 'index']);
    Route::post('/{id}', [PlaylistController::class, 'show']);  
    Route::post('/{id}', [PlaylistController::class, 'update']);  
    Route::delete('/{id}', [PlaylistController::class, 'destroy']);


    Route::post('/{id}', [PlaylistController::class, 'addSong']);
});


// ===================================================================================
// ROTA DE ALBUM
// ===================================================================================
Route::prefix('albuns')->group(function() {
    Route::post('/', [AlbumController::class, 'store']);
    Route::get('/', [AlbumController::class, 'index']);
    Route::get('/{id}', [AlbumController::class, 'show']);
    Route::put('/{id}', [AlbumController::class, 'update']);
    Route::delete('/{id}', [AlbumController::class, 'destroy']);
});


// ===================================================================================
// ROTA DE ARTISTA
// ===================================================================================
Route::prefix('/artista')->group(function() {
    Route::post('/', [ArtistaController::class, 'store']);
    Route::get('/', [ArtistaController::class, 'index']);
    Route::get('/{id}', [ArtistaController::class, 'show']);
    // Route::update('/{id}', [ArtistaController::class, 'update']);
    Route::delete('/{id}', [ArtistaController::class, 'destroy']);
});



