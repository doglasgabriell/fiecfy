<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    // Liberando as colunas que podem ser preenchidas via formulario/JSON 
    protected $fillable = ['name', 'genre', 'profile_pic_url'];
}
