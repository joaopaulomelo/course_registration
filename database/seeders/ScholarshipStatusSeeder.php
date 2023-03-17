<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScholarshipStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_statuses')->insert([
            1 => ['id' => 1, 'description' => 'Inscrições Abertas'],
            2 => ['id' => 2, 'description' => 'Finalizado'],
            3 => ['id' => 3, 'description' => 'Cancelado'],
            4 => ['id' => 4, 'description' => 'Vagas Esgotadas']
        ]);
    }
}
