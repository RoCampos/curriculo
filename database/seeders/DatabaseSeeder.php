<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Experiencia;
use App\Models\Habilidade;
use App\Models\Premio;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Rede::factory(10)->create();
        \App\Models\Curriculo::factory(10)->create();
        
        Habilidade::factory(20)->create();
        Experiencia::factory(20)->create();
        Premio::factory(20)->create();
        
    }
}
