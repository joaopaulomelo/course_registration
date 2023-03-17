<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KinshipTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kinship_types')->insert([
            1 => ['id' => 1, 'description' => 'Mãe'],
            2 => ['id' => 2, 'description' => 'Pai(a)'],
            3 => ['id' => 3, 'description' => 'Outros']
        ]);
    }
}
