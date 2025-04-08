<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 0,
            'password' => 'aszx1234',
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'role' => 1,
            'password' => 'aszx1234',
        ]);

        User::factory()->create([
            'name' => 'client',
            'email' => 'client@example.com',
            'role' => 2,
            'password' => 'aszx1234',
        ]);
    }
}