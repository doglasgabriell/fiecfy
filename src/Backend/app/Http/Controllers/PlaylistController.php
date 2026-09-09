<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class PlaylistController extends Controller
{

// ==============================================================================
// INSERIR -> INSERIR UM DADO
// ==============================================================================
    public function store(Request $request) {
        $insertPlaylist = Playlist::create($request->all());

        return response()->json($insertPlaylist);
    }


// ==============================================================================
// MOSTRAR -> SELECT * FROM playlist && SELECT * FROM playlist where id = ...
// ==============================================================================

    public function index() {
        $playlists = Playlist::all();

        return response()->json($playlists);
    }

    public function show(int $id) {
        $playlist = Playlist::findOrFail($id);

        return response()->json($playlist);
    }


// ==============================================================================
// UPDATE -> ATUALIZAR UM DADO
// ==============================================================================

    public function update(Request $request,int $id) {
        $updatePlaylist = Playlist::findOrFail($id);

        $updatePlaylist->update($request->all());

        return response()->json($updatePlaylist);
    }


// ==============================================================================
// DELETE -> DELETAR UM DADO
// ==============================================================================
    public function destroy(int $id) {

        $playlist = Playlist::finOrFail($id);

        $playlist->delete();

        return response()->json([
            'status' => true,
            'mensagem' => 'Remoção concluída com sucesso do id'
        ]);
    }

// ==============================================================================
// ATTACH
// ==============================================================================
    // ! PRECISO ESTUDAR MAIS UM POUCO SOBRE E ENTENDER MELHOR SOBRE ATTACH
    public function addSong(Request $request, int $id) {
        $playlist = Playlist::findOrFail($id);
        
        $playlist->songs()->attach($request->songs_id);

        return response()->json([
            "status" => true,
            "dados" => $playlist
        ]);
    }
}
