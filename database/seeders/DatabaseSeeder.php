<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
<<<<<<< HEAD
=======
use Database\Seeders\FormationSeeder;
use Database\Seeders\CourseSeeder;
>>>>>>> 8acd756732ab9152b9b75d0e76ad125782c406fd
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
<<<<<<< HEAD
            FormationSeeder::class,
            UserSeeder::class,
            PaymentSeeder::class,
            BlogSeeder::class,

        ]);

        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
=======
            FormationSeeder::class
        ]);
        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            CourseSeeder::class,
        ]);
>>>>>>> 8acd756732ab9152b9b75d0e76ad125782c406fd
    }
}
