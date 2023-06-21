<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FormationSeeder;
use Database\Seeders\CourseSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FormationSeeder::class,
            BlogSeeder::class,
        ]);
        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            CourseSeeder::class,
        ]);
    }
}
