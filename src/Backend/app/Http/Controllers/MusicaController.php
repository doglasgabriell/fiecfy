<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicaController extends Controller
{
    /*
    public function index() {
        $musica = [
            ['Artista' => 'Central cee', 'Música' => 'Sprinter'],
            ['Artista' => 'Central cee', 'Música' => 'Doja'],
            ['Artista' => 'Central cee', 'Música' => 'Let go'],
            ['Artista' => 'Central cee', 'Música' => 'Obsessed With You']
        ];

        return response()->json($musica);
    }
*/


    // ==========================================
    // Verbo HTTP Associado: GET
    // ==========================================
    public function index() {
        return response()->json([
            'sucesso' => true,
            'mensagem' => "Listagem de todas as musiscas simulado com sucesso!"
        ]);
    }

    // ==========================================
    // Verbo HTTP Associado: POST
    // Recebe a request injetada pelo postman
    // ==========================================
    public function store(Request $request) {
        // Extrair as chaves que chegam no corpo (JSON) da requisicao
        $tituloRecebido = $request->input('titulo');
        $artistaRecebido = $request->input('artista');

        // aqui chegaria as informacoes do BD(Banco de dados)
        return response()->json([
            'sucesso' => true,
            'mensagem' => "A música '${tituloRecebido}' de '${artistaRecebido}' foi salva!",
            'dados_recebido' => $request->all() // Mostra tudo que chegou
        ], 201);
    }
}
