<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MusicaController;
use App\Http\Controllers\PlaylistController;

Route::prefix('musicas')->group(function() {
    Route::get('/', [MusicaController::class, 'index']);
});

Route::prefix('playlists')->group(function() {
    Route::get('/', [PlaylistController::class, 'index']);
    Route::post('/', [PlaylistController::class, 'store']);
    Route::delete('/{id}', [PlaylistController::class, 'destroy']);
});

Route::prefix('albuns')->group(function() {
    Route::post('/', [AlbumController::class, 'store']);
    Route::get('/{id}', [AlbumController::class, 'show']);
    Route::get('/', [AlbumController::class, 'index']);
    Route::put('/{id}', [AlbumController::class, 'update']);
    Route::delete('/{id}', [AlbumController::class, 'destroy']);
});

Route::prefix('artista')->group(function() {
    Route::post('/', [ArtistaController::class, 'store']);
});

