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
        $company->offers = 3;
        $company->image = "mcdo.png";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Orange";
        $company->description = "L'opérateur mobile le plus utilisé en France";
        $company->rate = 3;
        $company->offers = 6;
        $company->image = "orange.png";
        $company->save();

        $company = new \App\Models\Companies();
        $company->name = "Airbus";
        $company->description = "Constructeur mondial d'avions de ligne";
        $company->rate = 5;
        $company->offers = 2;
        $company->image = "airbus.jpg";
        $company->save();
    }
}
