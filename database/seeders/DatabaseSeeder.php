<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(2)->create();

        \App\Models\User::factory()->create([
            'name' => 'mike',
            'email' => 'mike@gmail.com',
            'password' => Hash::make(11111111)
        ]);
    }
}
