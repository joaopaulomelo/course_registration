<?php

namespace Database\Seeders;

use App\Models\KinshipType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NationalitySeeder::class);
        $this->call(KinshipTypesSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ScholarshipStatusSeeder::class);
    }
}
