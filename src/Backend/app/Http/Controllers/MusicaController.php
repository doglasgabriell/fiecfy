<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicaController extends Controller
{

    
    // ==========================================
    // CREATE
    // ==========================================
    public function store(Request $request) {
        // Armazenando as requisições que veem do input do front
        $tituloRecebido = $request->input('titulo');
        $artistaRecebido = $request->input('artista');
        
        return response()->json([
            'sucesso' => true,
            'mensagem' => "A música '${tituloRecebido}' de '${artistaRecebido}' foi salva!",
            'dados_recebido' => $request->all() // Mostra tudo que chegou
            ], 201);
    }

        // ==========================================
        // EXIBIR TODAS AS MÚSICAS ->> SIMULAÇÃO
        // ==========================================
            public function index() {
                  return response()->json([
                    'sucesso' => true,
                    'mensagem' => "Listagem de todas as musiscas simulado com sucesso!"
                ]);
            }
}
