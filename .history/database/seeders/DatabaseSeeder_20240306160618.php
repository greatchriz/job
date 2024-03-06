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
            'name' => 'Regular User',
            'email' => 'unlayeremail4now@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),

        ]);

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'great.chriz@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),

        ]);

        \App\Models\User::factory()->create([
            'name' => 'Anagor Lucky',
            'email' => 'anagorlucky@gmail.com',
            'password' => Hash::make('Anagor12345'),
            'email_verified_at' => now(),

        ]);

        // $this->call(CompanySeeder::class);

        // call the CountrySeeder
        $this->call(CountrySeeder::class);

        // call the LocationSeeder
        $this->call(LocationSeeder::class);

        $this->call(JobSeeder::class);

        // $this->call(JobApplicationSeeder::class);


        $this->call(RolePermissionSeeder::class);

        //create 10 users and foreach of the user create a visa, so each user has a visa

        \App\Models\User::factory(10)->create()->each(function ($user) {
            // For each user, create a visa application
            \App\Models\Visa::factory()->create([
                'user_id' => $user->id, // Associate the visa with the user
            ]);
        });

        // call the FormInputSeeder
        $this->call(FormInputSeeder::class);



    }
}
