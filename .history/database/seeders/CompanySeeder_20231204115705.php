<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // creatw an array of companies from the companies migration file

          $companies = [
            [
                'name' => '
                Hotel Okura Amsterdam',
                'logo' => 'https://www.okurajobs.nl/en/Content/images/beeldlogo.svg',
                'location' => 'Hotel Okura Amsterdam · Amsterdam, North Holland, Netherlands',
                'category' => 'Hotels, Resturants',
                'description' => 'Hotel Okura Amsterdam is THE 5* hotel in Amsterdam to work for & stay at.<br>
                The most complete five-star hotel in the Netherlands, part of the Japanese chain Okura Hotels & Resorts and member of The Leading Hotels of the World.<br>

                We are always looking for enthusiastic professionals.<br>
                Driven colleagues who, like us, have a high priority for quality and service and who are keen to continue to develop.<br>

                Do you want to be part of the Okura team and work in an international environment with the largest employer in the Amsterdam hotel industry?<br>',
                'size' => '201-500',
            ],

            [
                'name' => 'UCC-Services BV',
                'logo' => 'https://media.licdn.com/dms/image/C560BAQEyrUSSLOxyng/company-logo_200_200/0/1630629239887?e=1709769600&v=beta&t=AM164R66EdNpclWlr4rxvsjQj8tNm9t-PbcVGXBx0Xg',
                'location' => 'Hoofdkantoor Spieringweg 603-Q, Vijfhuizen, 2141 EB, NL',
                'category' => 'Hotels, Lounges',
                'description' => 'UCC-Services offers unique benefits in the field of carpet and floor cleaning;
                <br>- Deep cleaning, completely disinfected, free of dust mites and pH neutral
                <br>- Immediately DRY upon completion (room, hall, or office can be rented out immediately)
                <br>- Cleaning of large surfaces in a short time (200m² per hour)
                <br>- Safe for people, pets, and food
                <br>- Minimal interruption, we work without the company/hotel there
                <br>(noise) nuisance, which can also make work during the day
                <br>executed
                <br>- Fully trained employees, 6 teams on the road every day, with a total of 16
                <br>machines at our disposal
                <br>- All employees are screened at the AIVD because of their work
                <br>at Schiphol
                <br>- UCC-Services works 24/7, 365 days a year and maintains floors and offices
                <br>and executive lounges',
                'size' => '51-200',
            ],

            [
                'name' => 'Sofitel London London',
                'logo' => 'https://www.boutique-hotel-vohburg.de/images/Beckenlehner.png',
                'location' => 'Grote Markt 36, 9711 LV Groningen',
                'category' => 'Hotels, Lounges',
                'description' => 'The hotel is characterized by its classic appearance that feels warm and homely. Upon entering you immediately feel welcome by the hospitality of the employees and the cozy atmosphere in the hotel. As a guest at Boutique Hotel De Doelen you can experience the city like a real local due to the perfect location. The location is close to all the nice coffee shops, bars, restaurants, shopping streets and sights!.',
                'size' => '25-150',
            ],

            [
                'name' => 'Fletcher Hotels',
                'logo' => 'https://www.fletcherzakelijk.nl/data/static/fletcher-assets/svg/logos/logo-fletcher.svg',
                'location' => 'Voorsterweg 28, 8316 PT Marknesse',
                'category' => 'Hotels, Lounges',
                'description' => 'Fletcher Hotels sets itself apart due to its authentic hotel-restaurants which are often housed in historic buildings. All hotels are situated in fantastic locations in the Netherlands. You will find them on the beach or in the middle of the dunes, but also in the beautiful hills of Limburg, or in one of the Netherlands historic cities. Moreover, all our hotels are unique, so each hotel provides a different atmosphere and experience.',
                'size' => '1001-5000',
            ]

        ];

        foreach ($companies as $company) {
            Company::create($company);
        }

    }
}
