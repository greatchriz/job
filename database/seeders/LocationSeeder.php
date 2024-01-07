<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    // get the countries where name is Netherlands
    $netherland = \App\Models\Country::where('name', 'Netherlands')->first();

    // get the countries where name is Greece
    $greece = \App\Models\Country::where('name', 'Greece')->first();

    // get the countries where name is Spain
    $spain = \App\Models\Country::where('name', 'Spain')->first();

    // get the countries where name is USA
    $usa = \App\Models\Country::where('name', 'USA')->first();

    // get the countries where name is UK
    $uk = \App\Models\Country::where('name', 'UK')->first();

    // get the countries where name is Canada
    $canada = \App\Models\Country::where('name', 'Canada')->first();


     $locations = [

        [
            'name' => 'Epirus',
            'country_id' => $greece->id,
        ],
        [
            'name' => 'Thessaly',
            'country_id' => $greece->id,
        ],
        [
            'name' => 'Macedonia',
            'country_id' => $greece->id,
        ],
        [
            'name' => 'Central Greece',
            'country_id' => $greece->id,
        ],
        [
            'name' => 'Peloponnese',
            'country_id' => $greece->id,
        ],
        [
            'name' => 'Crete',
            'country_id' => $greece->id,
        ],
        [
            'name' => 'Cyclades',
            'country_id' => $greece->id,
        ],
        [
            'name' => 'Dodecanese',
            'country_id' => $greece->id,
        ],
        [
            'name' => 'Rhodes',
            'country_id' => $greece->id,
        ],

         [
             'name' => 'Noord-Holland',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Zuid-Holland',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Zeeland',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Noord-Brabant',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Utrecht',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Flevoland',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Friesland',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Groningen',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Drenthe',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Overijssel',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Gelderland',
             'country_id' => $netherland->id,
         ],
         [
             'name' => 'Limburg',
             'country_id' => $netherland->id,
         ],

         [
            'name' => 'Madrid',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Barcelona',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Valencia',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Seville',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Zaragoza',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Malaga',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Murcia',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Palma (Majorca)',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Las Palmas (Gran Canaria)',
            'country_id' => $spain->id,
        ],
        [
            'name' => 'Bilbao',
            'country_id' => $spain->id,
        ],


         [
            'name' => 'New York',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'Los Angeles',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'Chicago',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'Houston',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'Phoenix',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'Philadelphia',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'San Antonio',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'San Diego',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'Dallas',
            'country_id' => $usa->id,
        ],
        [
            'name' => 'San Jose',
            'country_id' => $usa->id,
        ],


         [
            'name' => 'London',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Birmingham',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Glasgow',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Liverpool',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Leeds',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Manchester',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Sheffield',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Edinburgh',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Bristol',
            'country_id' => $uk->id,
        ],
        [
            'name' => 'Leicester',
            'country_id' => $uk->id,
        ],

        [
            'name' => 'Toronto',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Montreal',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Calgary',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Ottawa',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Edmonton',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Mississauga',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Winnipeg',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Vancouver',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Brampton',
            'country_id' => $canada->id,
        ],
        [
            'name' => 'Hamilton',
            'country_id' => $canada->id,
        ],

     ];

       foreach ($locations as $location) {
           \App\Models\Location::create([
               'name' => $location['name'],
               'country_id' => $location['country_id'],
           ]);
       }


    }
}
