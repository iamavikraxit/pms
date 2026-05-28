<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Alice Photographer',
            'email' => 'alice@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Bob Studio',
            'email' => 'bob@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Charlie Client',
            'email' => 'charlie@example.com',
            'password' => 'password',
        ]);
    }
}
