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

        // $this->call(CompanySeeder::class);

        $this->call(JobSeeder::class);

        // create 20 companies with company factory
        // $twentyCompanies = \App\Models\Company::factory(20)->create();

        // //for each $twentyCompanies, create 30 jobs
        // foreach ($twentyCompanies as $company) {
        //     \App\Models\Job::factory(30)->create([
        //         'company_id' => $company->id,
        //     ]);
        // }

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
