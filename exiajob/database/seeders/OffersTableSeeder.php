<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $offer->add_date = '2023-03-20';
        $offer->offer_description = 'Développeur soft pour McDo';
        $offer->skill1 = 'Développement objet';
        $offer->skill2 = 'Base de données';
        $offer->skill3 = 'Méthode SCRUM';
        $offer->idCompany = 1;
        $offer->save();
    }
}
