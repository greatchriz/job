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

            [
                'company_id' => 3,
                'title' => 'Chef hospitality manager boutique hotel',
                'description' => 'As a Chef catering manager, you are responsible, among other things, for the daily management of 20-40 employees within the hotel and cook the most delicious seasonal dishes in the kitchen with your own broth. You take care of an intensive lunch and dinner card.                ',
                'responsibilities' => 'In addition to managing the daily operation and monitoring excellent guest satisfaction, you are also responsible for other important matters such as: financial results, training & development of your team, staff satisfaction, scheduling and purchasing. In summary, as a Manager you are responsible for the functioning of your entire team and the results of your restaurant.',
                'requirements' => '• Sufficient F&B product knowledge;
                <br>• Flexibility: no 9 to 5 mentality, willing to work weekend shifts and available full time;
                <br>• Very good in Dutch & English and German language;
                <br>• You are guest-oriented and have an eye for details;
                <br>• Has a hands-on mentality,
                <br>• And a great sense of responsibility;
                <br>• You are critical, creative and solution-oriented;
                <br>• You are a team player with excellent social skills;
                <br>• You can handle stressful situations well;',
                'experiences' => 'At least 2 years of relevant managerial experience as Chef in the kitchen and/or manager of the restaurant;',
                'benefits' => '• Market-based salary that matches the years of experience and training<br>
                • Board and lodging on the island<br>
                • Travel allowance if you want to spend your days off ashore<br>
                • 25 vacation days based on full-time employment;<br>
                • We consider your pension just as important, which is why you are automatically registered with the catering pension;<br>
                • A vibrant team with nice colleagues;<br>
                • Plenty of growth opportunities;<br>
                • A dynamic, varied and exciting job within a young company;<br>
                • Flexible working hours.',
                'salary' => '€35,000.000',
                'deadline' => '2024-04-05',

            ],

            //duplicate the job array
            [
                'company_id' => 3,
                'title' => 'Boutique hotel catering manager',
                'description' => 'As a Catering Manager you are responsible for the daily management of 20-40 employees. You are the point of contact for both colleagues and guests. In addition, you are the calling card of the hotel and you ensure that all guests leave with a broad smile on their faces. You are not averse to rolling up your sleeves and ensuring that every shift runs smoothly.',

                'responsibilities' => 'In addition to managing the daily operation and monitoring excellent guest satisfaction, you are also responsible for other important matters such as: financial results, training & development of your team, staff satisfaction, scheduling and purchasing. In summary, as a Manager you are responsible for the functioning of your entire team and the results of your restaurant.',

                'requirements' => '• Sufficient F&B product knowledge;
                <br>• Flexibility: no 9 to 5 mentality, willing to work weekend shifts and available full time;
                <br>• Very good in Dutch & English and German language;
                <br>• You are guest-oriented and have an eye for details;
                <br>• Has a hands-on mentality,
                <br>• And a great sense of responsibility;
                <br>• You are critical, creative and solution-oriented;
                <br>• You are a team player with excellent social skills;
                <br>• You can handle stressful situations well;',

                'experiences' => 'At least 2 years of relevant managerial experience in the catering industry;',

                'benefits' => '• Room and board on the island<br>
                • Board and lodging on the island<br>
                • Travel allowance if you want to spend your days off on land',

                'salary' => '€40,200.000',

                'deadline' => '2024-04-05',

            ],

            [
                'company_id' => 4,
                'title' => 'Fletcher Hotel Manager',
                'description' => 'You are creative, take initiative because you ensure that guests enjoy coming to your hotel and of course want to come back.<br>
                You are driven and do everything you can to achieve the targets set for your hotel. You involve your colleagues in this. After all, you are a winning team.',

                'responsibilities' => 'You preferably have experience as a hotel manager or operations manager within the hotel industry.
                <br>You have very good communication skills in Dutch and English.
                <br>You are very representative and independent.
                <br>A guest-oriented attitude towards our guests and a coaching & motivating attitude towards our employees.
                <br>You are commercial and target oriented.
                <br>You are full of creativity. Ideal for the diversity of work.
                <br>You are flexible, working on weekends and evenings is no problem.
                <br>You are eager to learn.',

                'requirements' => '• You are available at least 38 hours a week.
                <br>• You have completed a catering education, preferably MHS or HHS.
                <br>• You enjoy dealing with guests.
                <br>• You get energy from collaborating with different departments, teams and hotels.
                <br>• You are enthusiastic, independent, enterprising and enterprising.',

                'experiences' => 'It is an advantage if you have held a similar position.',

                'benefits' => 'You start with a fixed-term contract, with the prospect of permanent employment.<br>
                A travel allowance of €0.19 cents per kilometer from 10 kilometers from your home address.<br>
                A good pension scheme.<br>
                If you join us, you will receive two free nights. You will receive the first overnight stay after successfully completing your trial period, the second free overnight stay when your contract is extended.<br>
                A good working atmosphere, with nice colleagues.<br>
                Various (personal) career opportunities through training and the opportunity to grow to larger hotels with more options and accountability.<br>
                Semi-annual bonus scheme for your set targets.',

                'salary' => '€66,000.000',

                'deadline' => '2024-02-25',

            ],

            [
                'company_id' => 5,
                'title' => 'Operations Management Intern for Hotels',
                'description' => 'In the position of Operations Intern at Louvre Hotels Group, you work closely with the operational team of the Benelux and the management of the hotels. You will gain practical knowledge in the field of hotel management at head office level. You will have the opportunity to be in charge of and develop an assigned project, as well as to assist in other operational daily tasks. You will collaborate with other colleagues in the regional office, such as HR, sales and revenue, and you will have an insight about how the different departments relate and collaborate.',

                'responsibilities' => 'You plan your work together and coordinate with the operational team.<br>
                You will work together with general managers of hotels on both project level and operational daily situations.<br>
                You play a big role in the rollout of the operational strategy.<br>
                You will be in charge of a project that you will develop with the support of the operational team and in collaboration with other departments.<br>
                You present your ideas and visions to the relevant parties.<br>
                You make sure that you maintain internal and external communication.<br>
                You help in the administrative tasks within the department.',

                'experiences' => '• You have experience in the field of hotel management.',

                'requirements' => 'You are looking for an internship, which you need to complete as part of your study for a higher education institution.<br>
                You are available for a fulltime internship, for a minimum of 20 weeks.<br>
                You are passionate about working in the hospitality industry.<br>
                You are solution oriented with an eye for detail.<br>
                You can understand and follow guidelines.<br>
                You have the flexibility to respond to different work situations.<br>
                You have good Microsoft Office skills.<br>
                You have good communication skills in English, Dutch is a plus.<br>',


                'salary' => '€12,000.000',
                'deadline' => '2024-01-25',



            ],




        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
