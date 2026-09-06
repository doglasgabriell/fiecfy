<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'duration_seconds',
        'album_id',
        'track_number'
    ];
    
    public function album() {
        return $this->belongsTo(Album::class);
    }

    public function playlist() {
        return $this->belongsToMany(Playlist::class);
    }
}
