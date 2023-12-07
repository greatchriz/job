<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //get all the users and count how many they are
        $users = \App\Models\User::all();
        $usersCount = $users->count();

        //get all the jobs and count how many they are
        $jobs = \App\Models\Job::all();
        $jobsCount = $jobs->count();

        // create a job application where job id is a random number between 1 and the number of jobs and the user id is a random number between 1 and the number of users
        for ($i = 0; $i < 15; $i++) {
            \App\Models\JobApplication::create([
                'job_id' => rand(1, $jobsCount),
                'user_id' => rand(1, $usersCount),
            ]);
        }

    }
}
