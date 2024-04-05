<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Artes',

        ]);
        DB::table('categorias')->insert([
            'nome' => 'Construção',

        ]);
        DB::table('categorias')->insert([
            'nome' => 'Decoração',

        ]);
        DB::table('categorias')->insert([
            'nome' => 'Eletrônica',

        ]);
        DB::table('categorias')->insert([
            'nome' => 'Costura',

        ]);
        DB::table('categorias')->insert([
            'nome' => 'Presentes',

        ]);
        DB::table('categorias')->insert([
            'nome' => 'Quadros',

        ]);
        DB::table('categorias')->insert([
            'nome' => 'Bijuteria',

        ]);
    }
}
