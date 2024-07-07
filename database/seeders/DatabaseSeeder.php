<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cargo;
use App\Models\TrackedCargo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
         User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        //Cargo::factory(5)->create();

        TrackedCargo::factory(5)->create();
    }
}
