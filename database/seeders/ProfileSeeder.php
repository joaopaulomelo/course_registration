<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            1 => ['id' => 1, 'name' => 'Aluno', 'description' => '', 'active' => 1],
            2 => ['id' => 2, 'name' => 'Secretaria', 'description'=> '', 'active' => 1]
        ]);
    }
}
