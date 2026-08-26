<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{

    

    // =========================================================
    // Metodo index, devolve a colecao inteira
    // =========================================================

    public function index() {
        $colecaoArtistas = [
            ['nome' => 'The Weeknd', 'estilo' => 'R&G / Pop'],
            ['nome' => 'Daft Punk', 'estilo' => 'Eletrônica Clássica']
        ];

        // Envelope serializado
        return response()->json([
            'sucesso' => true,
            'dados' => $colecaoArtistas
        ]);
    }


    // =========================================================
    // Metodo show: Devolve um item busado por 10
    // =========================================================
    public function show($id) {
        return response()->json([
            'sucesso' => true,
            'mensagem' => "Log de busca ativado para o ID do artista" . $id
        ]);
    }
}
