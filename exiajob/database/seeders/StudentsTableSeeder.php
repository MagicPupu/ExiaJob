<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = new \App\Models\Students();
        $student->name = "Don Leon";
        $student->description = "Je suis un développeur hors pair on m'appelle Léon-Maker";
        $student->promo = "Bordeaux 2023";
        $student->skills = "HTML, CSS, JS, SQL, PHP";
        $student->image = "homme1.png";
        $student->save();

        $student = new \App\Models\Students();
        $student->name = "Le J";
        $student->description = "Face It level 10, dev front end et souleveur de prof d'anglais";
        $student->promo = "Bordeaux 2023";
        $student->skills = "T O U T";
        $student->image = "homme2.png";
        $student->save();

        $student = new \App\Models\Students();
        $student->name = "Magic_Pupu";
        $student->description = "El big râleur, dev back end";
        $student->promo = "Bordeaux 2023";
        $student->skills = "jtebz";
        $student->image = "homme3.png";
        $student->save();
    }
}
