<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::query()->delete();
        // User::query()->create([
        //     'name' => "af",
        //     'email' => "af",
        //     'password' => "af",
        // ]);


        User::factory()->count(5)->create();
    }
}
