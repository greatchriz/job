<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $countries = [
            [
                'name' => 'Greece',
            ],
            [
                'name' => 'Netherlands',
            ],
            [
                'name' => 'Spain',
            ],
            [
                'name' => 'USA',
            ],
            [
                'name' => 'UK',
            ],
            [
                'name' => 'Canada',
            ],

        ];

        foreach ($countries as $country) {
            \App\Models\Country::create($country);
        }

    }
}
