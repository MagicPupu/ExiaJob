<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company = new \App\Models\Companies();
        $company->name = "McDonald's";
        $company->description = "La fameuse chaine de fast food américaine";
        $company->rate = 4;
        $company->image = "mcdo.png";
        $company->link = "https://www.mcdonalds.fr/";
        $company->email = "mcdo@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Orange";
        $company->description = "L'opérateur mobile le plus utilisé en France";
        $company->rate = 3;
        $company->image = "orange.png";
        $company->link = "https://www.orange.fr/";
        $company->email = "orange@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Google";
        $company->description = "Moteur de recherche modialement connu";
        $company->rate = 5;
        $company->image = "google.png";
        $company->link = "https://www.google.com/";
        $company->email = "google@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Zenika";
        $company->description = "Description Zenika";
        $company->rate = 3;
        $company->image = "zenika.png";
        $company->link = "https://www.zenika.com/";
        $company->email = "zenika@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Isagri";
        $company->description = "Description Isagri";
        $company->rate = 2;
        $company->image = "isagri.png";
        $company->link = "https://www.isagri.fr/";
        $company->email = "isagri@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Airbus";
        $company->description = "Description Airbus";
        $company->rate = 5;
        $company->image = "airbus.jpg";
        $company->link = "https://www.airbus.com/";
        $company->email = "airbus@mail.com";
        $company->save();
    }
}
