<?php

namespace Database\Seeders;

use CoursesTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(CoursesTableSeeder::class);
    }
}
