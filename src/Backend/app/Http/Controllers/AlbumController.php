<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
// ==============================================================================
// CREATE -> CRIAR
// ============================================================================== 
    public function store(Request $request) {
        $albums = Album::create($request->all());

        return response()->json($albums);
    }

    

// ==============================================================================
// READ -> LER
// ==============================================================================
    public function index() {
        $allAlbuns = Album::all();

        return response()->json($allAlbuns);
    }


    // Como irei buscar um album apenas na tabela, uso o parametro ID que sera passado
    public function show(int $id) {

        // Passo o parametro $id tambem por será este parametro que o método findOrFail buscará
        $album = Album::with('songs')->findOrFail($id);

        return response()->json($album);
    }   



// ==============================================================================
// UPDATE -> ATUALIZAR UM DADO
// ==============================================================================
    public function update(Request $request, int $id) {
        $album = Album::findOrFail($id);

        $album->update($request->all());

        return response()->json([
            "Mensagem" => 'Album atualizado com sucesso', 
            "dados atualizado" => 'Ano de lançamento: ' . $album->release_year
        ]);
    }
    

// ==============================================================================
// DELETE -> DELETAR UM DADO
// ==============================================================================
    public function destroy(int $id) {
        $albumExcluido = Album::findOrFail($id);

        $albumExcluido->delete();

        return response()->json([
            "Mensageem" => "Excluído com sucesso"
        ]);
    }
}