<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
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


        // create an array of jobs
        $jobs = [
            [
                'job_title' => 'Software Engineer',
                'company' => 'Google',
                'salary' => '100000',
                'deadline' => '2023-12-31',
            ],
            [
                'job_title' => 'Data Analyst',
                'company' => 'Microsoft',
                'salary' => '80000',
                'deadline' => '2023-12-31',
            ],
            // Add more jobs here...
        ];


        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
