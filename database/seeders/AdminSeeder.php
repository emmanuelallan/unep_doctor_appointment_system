<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create one admin user when seeding
        \App\Models\User::factory()->create([
            'email' => 'receptionist@gmail.com',
            'is_admin' => true,
            'password' => bcrypt('password'),
        ]);
    }
}
