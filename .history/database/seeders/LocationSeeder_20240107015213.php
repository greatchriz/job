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



     //Greece

     // Epirus, Thessaly, Macedonia, Central Greece, Peloponnese, Crete, Cyclades, Dodecanese, Rhodes,

     // Netherlands

    // Noord-Holland (North Holland)
    // Zuid-Holland (South Holland)
    // Zeeland
    // Noord-Brabant (North Brabant)
    // Utrecht
    // Flevoland
    // Friesland
    // Groningen
    // Drenthe
    // Overijssel
    // Gelderland
    // Limburg

    // Spain

    // 1. Madrid
    // 2. Barcelona
    // 3. Valencia
    // 4. Seville
    // 5. Zaragoza
    // 6. Malaga
    // 7. Murcia
    // 8. Palma (Majorca)
    // 9. Las Palmas (Gran Canaria)
    // 10. Bilbao

     $locations = [
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
     ];

       foreach ($locations as $location) {
           \App\Models\Location::create([
               'name' => $location['name'],
               'country_id' => $location['country_id'],
           ]);
       }

       // get

    }
}
