<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('table_historia')->insert([
            'titulo' => 'Hola',
            'pseudonimo' => 'leorloer',
            'contenido_historia' => 'lalalalala'
        ]);
    }
}