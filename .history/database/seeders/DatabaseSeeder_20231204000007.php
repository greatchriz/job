<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Company;
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

        // creatw an array of companies from the companies migration file

        $companies = [
            [
                'name' => '
                Hotel Okura Amsterdam',
                'logo' => 'https://www.okurajobs.nl/en/Content/images/beeldlogo.svg',
                'location' => 'Hotel Okura Amsterdam · Amsterdam, North Holland, Netherlands',
                'category' => 'Hotels, Resturants',
                'description' => 'Hotel Okura Amsterdam is THE 5* hotel in Amsterdam to work for & stay at.
                The most complete five-star hotel in the Netherlands, part of the Japanese chain Okura Hotels & Resorts and member of The Leading Hotels of the World.

                We are always looking for enthusiastic professionals. Driven colleagues who, like us, have a high priority for quality and service and who are keen to continue to develop.

                Do you want to be part of the Okura team and work in an international environment with the largest employer in the Amsterdam hotel industry? For more information about working in Hotel Okura Amsterdam and our vacancies, please check our website www.okurajobs.nl.',
                'size' => '201-500',
            ],

        ];

        foreach ($companies as $company) {
            Company::create($company);
        }


        // create an array of jobs from the jobs migration file

        $jobs = [
            [
                'company_id' => 1,
                'job_title' => 'Frontend Developer',
                'description' => 'Frontend Developer',
                'responsibilities' => 'Developing and maintaining web applications using HTML, CSS, and JavaScript.',
                'requirements' => 'Experience with web development technologies such as HTML, CSS, and JavaScript.',
                'experiences' => '2+ years of experience in web development.',
                'duties' => 'Develop and maintain web applications using HTML, CSS, and JavaScript.',
                'benefits' => 'Paid time off.',
                'salary' => '€20.000',
                'deadline' => '2023-06-30',
            ],
        ];


    }
}
