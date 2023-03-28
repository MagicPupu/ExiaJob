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
        $company->description = "McDonald's Corporation est une chaîne de restauration rapide mondiale. Elle est développée par l'homme d'affaires américain Ray Kroc en 1952 après qu'il a acheté les droits d'une petite chaîne de hamburger exploitée à partir de 1940 par Richard et Maurice McDonald.";
        $company->rate = 4;
        $company->image = "mcdo.png";
        $company->link = "https://www.mcdonalds.fr/";
        $company->email = "mcdo@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Orange";
        $company->description = "Orange est une société française de télécommunications. Elle comptait à la fin de 2019 près de 266 millions de clients dans le monde, des chiffres en hausse par rapport à ceux affichés en 2018.";
        $company->rate = 3;
        $company->image = "orange.png";
        $company->link = "https://www.orange.fr/";
        $company->email = "orange@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Google";
        $company->description = "Google LLC est une entreprise américaine de services technologiques fondée en 1998 dans la Silicon Valley, en Californie, par Larry Page et Sergey Brin, créateurs du moteur de recherche Google. C'est une filiale de la société Alphabet depuis août 2015.";
        $company->rate = 5;
        $company->image = "google.png";
        $company->link = "https://www.google.com/";
        $company->email = "google@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Zenika";
        $company->description = "Créé en 2006, Zenika est un cabinet d’innovation technologique, managériale et organisationnelle, qui accompagne les entreprises dans leur transformation numérique. Nous sommes avant tout une entreprise qui a la capacité de s'adapter et de se positionner sur de nouveaux créneaux technologiques.";
        $company->rate = 3;
        $company->image = "zenika.png";
        $company->link = "https://www.zenika.com/";
        $company->email = "zenika@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Isagri";
        $company->description = "ISAGRI est une entreprise française et familiale spécialisée en informatique et presse agricole basée à Tillé et créée en 1983 par Jean-Marie Savalle, Président de Groupe ISAGRI. La direction est assurée par Pascal Chevallier.";
        $company->rate = 2;
        $company->image = "isagri.png";
        $company->link = "https://www.isagri.fr/";
        $company->email = "isagri@mail.com";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Airbus";
        $company->description = "Airbus Commercial Aircraft, connu sous le nom Airbus SAS, est un constructeur aéronautique européen dont le siège social se trouve à Blagnac, à côté de l'aéroport, dans la banlieue de Toulouse, en France.";
        $company->rate = 5;
        $company->image = "airbus.jpg";
        $company->link = "https://www.airbus.com/";
        $company->email = "airbus@mail.com";
        $company->save();
    }
}
