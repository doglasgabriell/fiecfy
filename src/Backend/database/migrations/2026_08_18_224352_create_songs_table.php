<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('duration_seconds');
            $table->boolean('is_explicit')->default(false);

            // Chave estrangeira referente ao album
            $table->foreignId('album_id')->constrained()->cascadeOnDelete();

            $table->integer('track_number')->default(1); // faixa 1, 2, 3
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};


// ! ================================================================
// * Código para criar uma migration
    // php artisan make:migration create_nome_table

// * Comando para fazer a migração
    // php artisan migrate
// ! ================================================================
