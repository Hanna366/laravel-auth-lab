<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the admin user with known credentials
        User::factory()->create([
            'username' => 'adminuser',
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'), // Known password for testing: password123
            'is_active' => true,
        ]);

        // Create 99 additional random users
        User::factory(99)->create();
    }
}
