<?php

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



