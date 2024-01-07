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

       // create locations from this lotions below
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

       // create locations

       $locations = [
           [
               'name' => 'Noord-Holland',
           ],
           [
               'name' => 'Zuid-Holland',
           ],
           [
               'name' => 'Zeeland',
           ],
           [
               'name' => 'Noord-Brabant',
           ],
           [
               'name' => 'Utrecht',
           ],
           [
               'name' => 'Flevoland',
           ],
           [
               'name' => 'Friesland',
           ],
           [
               'name' => 'Groningen',
           ],
           [
               'name' => 'Drenthe',
           ],
           [
               'name' => 'Overijssel',
           ],
           [
               'name' => 'Gelderland',
           ],
           [
               'name' => 'Limburg',
           ],
       ];

       foreach ($locations as $location) {
           \App\Models\Location::create([
               'name' => $location['name'],
               'country_id' => $netherland->id,
           ]);
       }
    }
}
