<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

// ! ====================================================================
// * Comando para criar um seeder
    // php artisan make:seeder NomeSeeder


// * Comando para rodar um seeder especifico
    // php artisan db:seed --class=NomeSeeder

// * Comando para rodar todos os seeders
    // php artisan db:seed
// ! ====================================================================

