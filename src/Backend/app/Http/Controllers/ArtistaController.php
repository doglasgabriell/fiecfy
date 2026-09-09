<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Http\Request;
use Psr\Http\Message\ResponseFactoryInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class ArtistaController extends Controller
{

// ==============================================================================
// CREATE -> CRIAR
// ==============================================================================
    public function store(Request $request) {
        // Criando uma variável, que armazena a requisição (os dados) que foram inseridos nas colunas que foram liberadas no model 'Artist' e salvando(create) no banco sozinho
        $novoArtista = Artist::create($request->all());


        // Retorna os dados (A requisição) que foram atribuídas na váriavel $novoArtista
        return response()->json($novoArtista, 200);
    }


// ==============================================================================
// READ -> LER
// ==============================================================================

    // Buscando todos os artistas
    public function index() {
        // Select * from artists
        $todosArtistas = Artist::all();
        
        return response()->json($todosArtistas, 200);
    }

    // buscando apenas uma linha
    public function show(int $id) {
        // select * from artista where id = ??? 
        $artista = Artist::with('albums')->findOrFail($id);

        return response()->json($artista, 200);
    }

// ==============================================================================
// UPDATE -> ATUALIZAR UM DADO
// ==============================================================================
    

    public function update(Request $request, int $id) {
        $artista = Artist::findOrFail($id);

        // Aplica os dados novos por cima dos antigos e salva -> substitui
        $artista->update($request->all());

        return response()->json($artista, 200);
    }



// ==============================================================================
// DELETE -> DELETAR UM DADO
// ==============================================================================

    // Executa a funcao de deletar um id especifico

    // passamos o id no parametro
    public function destroy(int $id) {
        $artista = Artist::findOrFail($id);

        $artista->delete();

        return response()->json([
            'mensagem' => 'Apagado com sucesso'
        ], 200);
    }
}