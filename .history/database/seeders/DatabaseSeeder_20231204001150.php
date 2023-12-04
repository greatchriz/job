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
                'job_title' => 'Waiter/waitress Yamazato Restaurant*',
                'description' => '
                On the ground floor of Hotel Okura Amsterdam you will find the authentic Japanese Yamazato Restaurant. Yamazato is the first traditional kaiseki restaurant outside of Japan that is awarded with a Michelin star. More than fifty specialties from traditional kaiseki ryori cuisine, the Japanese haute cuisine, are prepared by the skilled hands of Executive Chef & Manager Masanori Tomikawa and the team of Japanese chefs. By using typical Japanese materials in the interior, and the adjacent garden with a beautiful cherry blossom in spring, you feel as if you are in Japan. The authentic Japanese Yamazato Restaurant has been awarded with a Michelin star since 2002.
                <br>

                The standards that apply to kaiseki cuisine greatly differ from the modern Japanese cuisine. The Yamazato menu is composed according to the classic kaiseki structure. The kitchen distinguishes itself by focusing on the purity of seasonal, traditional Japanese ingredients. The style is minimalistic and all dishes are in balance, from the taste and texture to the appearance and colours of the dishes. The dishes, tableware as well as the kimonos of the waitresses are all immersed in symbolism according to the changes of the season.',

                'responsibilities' => 'Operational tasks in the restaurant, such as taking orders, serving guests and arrange payments. <br> Looking after mise en place, providing information about Japanese dishes, method of preparation, the Japanese tradition and customs.<br> Pro-actively selling restaurant products. <br> Working in a multicultural environment.
                ',
                'requirements' => 'You show similar work experience (1-2 years) in luxury hotels and/or restaurants <br> You have sufficient knowledge of Japanese dishes and menus <br> You are fluent in Japanese and English, preferably also in writing',
                'experiences' => '1+ years of work experience in a restaurant or hotel',
                'duties' => 'As a waiter/waitress you will be responsible for taking orders, serving dishes, handling payment and cleaning the tables and the restaurant and you are able to explain the kaiseki dishes to the guests.',
                'benefits' => 'Contract: 1 year contract <br> Bonus: 1 week salary when the hotel reaches the budgeted GOP (Gross Operating Profit)',
                'salary' => '€29,580.000 per Year',
                'deadline' => '2024-02-10',
            ],
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }


    }
}
