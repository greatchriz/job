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
                'name' => 'Papendal Hotel',
                'logo' => 'https://papendal.com/wp-content/themes/papendal/img/papendal-logo.png',
                'location' => 'Papendallaan, Arnhem, Gelderland 6816 VD, NL',
                'category' => 'Hotels, Lounges',
                'description' => 'Hidden in the forests of the Veluwe, on the outskirts of the city of Arnhem, you will discover the secret of Papendal. <br>At our beautiful and dynamic location, surrounded by nature, sporting excellence and business join together in a colourful way.
                <br>Everyone is able to perform at their very best at such a unique location! So can you.
                <br>We will gladly support you with this. By thinking along with you, for example, or by always being at your service.
                <br>Whether it is enhancing knowledge during a congress, developing a sports talent or organising an event.
                <br>Together we set the bar at the right level for you to achieve your goals.
                <br>Powerfully and as a true entrepreneur.',
                'size' => '51-250',
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
