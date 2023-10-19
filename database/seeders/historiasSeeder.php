<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class historiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'titulo' => 'el de las pampas',
            'categoria' => 'Terror',
            'texto' => 'Loresdldslkdfjdlksjfkldsfljdslcflklksdhf',
        ];
        DB::table('historias')->insert($data);
    }
}