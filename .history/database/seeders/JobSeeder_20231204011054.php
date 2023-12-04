<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create an array of jobs from the jobs migration file

        $jobs = [
            [
                'company_id' => 1,
                'title' => 'Waiter/waitress Yamazato Restaurant*',
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
                'salary' => '€29,580.000',
                'deadline' => '2024-02-10',
            ],

            [
            'company_id' => 2,
            'title' => 'Waiter / Waitress - Sazanka Restaurant',
            'description' => '',
            'responsibilities' => '',
            'requirements' => '',
            'experiences' => '',
            'duties' => '',
            'benefits' => '',
            'salary' => '',
            'deadline' => '',
            ],
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
