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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();

            // Coluna obrigatoria
            $table->string('name');

            // Campo opcional
            $table->string('genre')->nullable();

            // Foto de perfil
            $table->string('profile_pic_url')->default('default.jpg');

            // Cria created_at e updated_At
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
