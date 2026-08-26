<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index() {
        $albuns = [
            ['Álbum' => 'Wild West'],
            ['Álbum' => "Can't rush greatness"],
            ['Álbum' => 'All Roads lead home']
        ];

        return response()->json($albuns);
    }

    public function show($id) {
        return response()->json([
            'status' => true,
            'mensagem' => 'Mensagem de interpole:' . $id
        ]);
    }
}
