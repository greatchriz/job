<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),

        ]);

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'great.chriz@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),

        ]);

        $this->call(CompanySeeder::class);

        $this->call(JobSeeder::class);

        $this->call(JobApplicationSeeder::class);

        $this->call(RolePermissionSeeder::class);


    }
}
