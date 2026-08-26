<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class PlaylistController extends Controller
{
    public function index() {
        $playlists = [
            ['id' => 1, 'Nome' => 'Xtranho', 'Autor' => 'Matue'],
            ['id' => 2, 'Nome' => 'Balunbalungalasca', 'Autor' => 'Ratao MC'],
            ['id' => 3, 'Nome' => 'Madagascar', 'Autor' => 'Rei leão'],
        ];

        return response()->json([
            'Status' => true,
            'Mensagem' => 'Listagem completa',
            'dados' => $playlists
        ]);
    }

    public function store(Request $request) {
        $nome_playlist = $request->input('nome-playlist');

        return response()->json([
            'Status' => true,
            'Mensagem' => "O nome da playlist foi capturado de '${nome_playlist}'",
            'Dados recebido' => $request->all()
        ], 201);
    }


    public function destroy($id) {
        return response()->json([
            'status' => true,
            'mensagem' => 'Remoção concluída com sucesso do id {$id}'
        ]);
    }
}
