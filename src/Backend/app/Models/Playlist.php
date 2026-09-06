<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = [
        'songs_id',
        'nome',
        'descricao',
        'imagem'
    ];

    public function songs() {
        return $this->belongsToMany(Song::class);
    }
}
