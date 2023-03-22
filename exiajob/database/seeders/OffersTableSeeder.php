<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Software dev';
        $offer->city = 'Bordeaux';
        $offer->duration = 4;
        $offer->price = 500;
        $offer->add_date = Carbon::now();
        $offer->offer_description = 'Développeur soft pour McDo';
        $offer->skill1 = 'Développement objet';
        $offer->skill2 = 'Base de données';
        $offer->skill3 = 'Méthode SCRUM';
        $offer->idCompany = 1;
        $offer->save();

        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Web designer';
        $offer->city = 'Nantes';
        $offer->duration = 8;
        $offer->price = 1000;
        $offer->add_date = Carbon::now();
        $offer->offer_description = 'Web designer pour Orange';
        $offer->skill1 = 'Design';
        $offer->skill2 = 'Figma';
        $offer->skill3 = 'Frontend';
        $offer->idCompany = 2;
        $offer->save();
    }
}
