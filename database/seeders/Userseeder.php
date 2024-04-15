<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'André Neves',
            'email' => 'andr@andr.com.br',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alessandro Davi',
            'email' => 'alessandro.dfm@hotmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'João Procopio',
            'email' => 'joao.procopio@hotmail.com',
            'password' => Hash::make('12345679'),
        ]);
        
    }
}
