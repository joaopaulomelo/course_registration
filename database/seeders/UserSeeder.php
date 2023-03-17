<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            1 => ['id' => 1, 'email' => 'admin_sec@xpto.com.br', 'password' => bcrypt('secXpto'), 'first_login' => 0, 'profile_id' => 2],
        ]);
    }
}
