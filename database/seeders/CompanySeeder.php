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

        ];

        foreach ($companies as $company) {
            Company::create($company);
        }

    }
}
