<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Manager 1',
            'email' => 'manager@mail.com',
            'role' => 'manager',
            'password' => bcrypt('manager123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Manager 2',
            'email' => 'manager2@mail.com',
            'role' => 'manager',
            'password' => bcrypt('manager123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
