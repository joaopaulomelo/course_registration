<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
            1 => ['id' => 1, 'description' => 'Brasileiro(a)'],
            2 => ['id' => 2, 'description' => 'Estrangeiro(a)']
        ]);
    }
}
