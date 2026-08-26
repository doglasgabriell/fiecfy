<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MusicaController;



// Cria uma classe
class FaixaMusical {
    // Aqui fica as propriedades tipadas
    public string $titulo;
    public string $nome;
    public int $ouvintes;
    public string $estilo;
    public bool $famoso;

    // Método constructor (Que vai rodar quando for chamado um "New")
    public function  __construct(string $tituloDesejado, string $nomeDesejado, int $ouvintesMensais, string $estiloArtista) {
        $this->titulo = $tituloDesejado; // Acessando as variavéis criadas la de cima
        $this->nome = $nomeDesejado; // Acessando as variavéis criadas la de cima 
        $this->ouvintes = $ouvintesMensais;
        $this->estilo = $estiloArtista;
        $this->famoso = $this->isFamoso();
    
    }

    // Ação do objeto functionName():string -> Usa-se quando a funcao esta retornando algo. Aqui estou dizendo que a funcao irá retorna apenas string
    public function getDetalhes():string {
        //  Usa-se ponto (.) para a concatenação
        return $this->titulo . "-" . $this->nome . "-" . $this->ouvintes . '-' . $this->estilo . '-' . $this->famoso;
    }
 
    public function isFamoso():bool {
        if ($this->ouvintes > 1000000) {
            return true;
        } else {
            return false;
        }
    }
}


Route::get('/minha-musica', function () {
    // Instacioando o objeto com new
    $musica1 = new FaixaMusical('Anos luz', 'Matuê', 1000, 'Trap');
    return response()->json($musica1);
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Artista', [ArtistaController::class, 'index']);
Route::get('/Artista{id}', [ArtistaController::class, 'show']);

Route::get('/Album', [AlbumController::class, 'index']);
Route::get('/Album/{id}', [AlbumController::class, 'show']);

Route::get('/Music', [MusicaController::class, 'index']);


/*
// Criando uma classe no php
class FaixaMusical {
    // Propriedade tipadas
    public string $titulo;
    public string $artista;

    // Método construtor (roda quando chamado o 'new ')
    public function __construct( string $tituloDesejado, string $artistaDesejado) {
        $this->titulo = $tituloDesejado; // Acessando a variavel $titulo
        $this->artista = $artistaDesejado;
    }

    // Ação do objeto // :string usado quando a função retorna algo
    public function getDetalhes():string {
        // Usando ponto ( . ) para concatenar
        return $this->titulo . " -" . $this->artista;
    }
}

// Criando um endpoint para o objeto
Route::get('/minha-musica', function () {
    // Instaciando o objeto
    $musica1 = new FaixaMusical('Bohemian Rhapsody', 'Queen');

    return response()->json($musica1);
});

Route::get('/teste', function () {
    return [
        'Sistema' => 'API Clone do Spotify', 
        'Versão' => '1.0',
        'Status' => 'Conectado'
    ];
});

*/