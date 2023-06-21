<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
<<<<<<< HEAD
use Database\Seeders\FormationSeeder;
use Database\Seeders\CourseSeeder;
=======
>>>>>>> 2d4f597ae2f437113f388596e84256dc72eb4727
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FormationSeeder::class,
            UserSeeder::class,
            PaymentSeeder::class,
            BlogSeeder::class,
<<<<<<< HEAD
        ]);
        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            CourseSeeder::class,
        ]);
=======

        ]);

        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 2d4f597ae2f437113f388596e84256dc72eb4727
    }
}
