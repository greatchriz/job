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
            'title' => 'Hotel Night Cleaner to Join Existing Team, Amsterdam',
            'description' => 'Are you night owl, with an eye for details?<br>
            Join our small and friendly team of night cleaners in a five star hotel in the center of Amsterdam.',
            'responsibilities' => 'You will be part of a crew responsible for preparing the kitchen for the chefs the next day. Duties will include general surface cleaning, floors, stewarding area and canteen. Shifts available are (23:00 until 03:00) or (23:00 until 06:00) four or five days a week.',
            'requirements' => 'Previous hotel or general night shift experience is an advantage.
            ',
            'experiences' => '',
            'duties' => '',
            'benefits' => 'Employment is directly with us and at a perminent location.            ',
            'salary' => '€32,580.000',
            'deadline' => '2023-12-29',
            ],

            [
                'company_id' => 1,
                'title' => 'HR Business Partner at Hotel Okura*',
                'description' => 'At international five-star hotel Okura Amsterdam, you get the opportunity to work with passionate colleagues who have made Omotenashi, the Japanese form of very exclusive hospitality, their philosophy of life.<br>

                As an HR Business Partner, you get energy from the combination of operational and project-based activities within the full range of HR.<br>

                Your role is essential to support the business so that they can excel in Michelin-recognized culinary delights, organizing major international events, and catering for special guests with unparalleled care and attention.<br>

                Curious about more?<br>Then read on!',
                'responsibilities' => '',
                'requirements' => 'An HBO diploma;<br>
                Strong communication skills;<br>
                Knowledge of the Gatekeeper Improvement Act and interest in providing support in the event of absenteeism;<br>
                Good knowledge of and experience with relevant legislation and regulations;<br>
                Excellent command of both the Dutch and English languages, both written and spoken.<br>',
                'experiences' => 'At least 1-2 years of experience in a similar role within a dynamic work environment.<br>',
                'duties' => '',
                'benefits' => 'A 1-year contract, but possible extension;<br>

                A salary depending on work experience between €3,200 and €4,500 gross per month;<br>

                A bonus of 1 weeks salary when you achieve your SMART goals;<br>

                Attractive family and friend rates for overnight stays in Hotel Okura Amsterdam;<br>

                Employee discount in our restaurants (20%) and once a year (50%);<br>

                25 vacation days per year (pro rata);<br>

                The Catering Collective Labor Agreement applies, as does the General Pension Scheme for the Catering and Catering Industry and the General Survivors Pension;<br>

                Attractive family and friend rates for overnight stays in Hotel Okura Amsterdam;<br>

                Travel expenses contribution from 10 km (single trip);<br>

                After completing the trial period, you will receive an overnight stay with breakfast as a gift (2 persons), so that you can experience the hotel as a guest!<br>',
                'salary' => '€54,000.000',
                'deadline' => '2024-04-25',

            ],
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
