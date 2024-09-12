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
        User::factory()->create([
            'name' => 'Freddy McFredderson',
            'email' => 'freddy.mcfredderson@fake.com',
            'password' => bcrypt('freddy.mcfredderson@fake.com'),
        ]);
    }
}
