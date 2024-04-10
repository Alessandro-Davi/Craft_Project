<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'titulo' => 'Artes',
            'conteudo' => 'Fazendo um herói pintado em rolo de papel higiênico',
            'user_id' => 1,
            'categoria_id' => 1,
        ]);
        DB::table('postagens')->insert([
            'titulo' => 'Construção',
            'conteudo' => 'Moldando uma imagem na madeira',
            'user_id' => 1,
            'categoria_id' => 2,
        ]);
    }
}
