<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['artist_id', 'title', 'release_year', 'cover_image'];
    
    public function artist() {
        return $this->belongsTo(Artist::class);
    }
}

