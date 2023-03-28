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
        $offer->city = 'Paris';
        $offer->duration = 8;
        $offer->price = 1000;
        $offer->add_date = Carbon::now();
        $offer->offer_description = 'Web designer pour Orange';
        $offer->skill1 = 'Design';
        $offer->skill2 = 'Figma';
        $offer->skill3 = 'Frontend';
        $offer->idCompany = 2;
        $offer->save();

        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Administrateur';
        $offer->city = 'Paris';
        $offer->duration = 6;
        $offer->price = 1100;
        $offer->add_date = Carbon::now();
        $offer->offer_description = 'Administrateur pour Google';
        $offer->skill1 = 'Database';
        $offer->skill2 = 'SQL';
        $offer->skill3 = 'Backend';
        $offer->idCompany = 3;
        $offer->save();

        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Cloud Engineer';
        $offer->city = 'Marseilles';
        $offer->duration = 8;
        $offer->price = 600;
        $offer->add_date = Carbon::now();
        $offer->offer_description = 'Zenika';
        $offer->skill1 = 'Cloud';
        $offer->skill2 = 'Réseaux';
        $offer->skill3 = 'Systèmes';
        $offer->idCompany = 4;
        $offer->save();

        $offer = new \App\Models\Offer();
        $offer->offer_name = 'Chef de projet';
        $offer->city = 'Bordeaux';
        $offer->duration = 8;
        $offer->price = 750;
        $offer->add_date = Carbon::now();
        $offer->offer_description = 'Isagri';
        $offer->skill1 = 'Méthode Agile';
        $offer->skill2 = 'PERT/GANTT';
        $offer->skill3 = 'SCRUM';
        $offer->idCompany = 5;
        $offer->save();
    }
}
