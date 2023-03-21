<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new \App\Models\User();
        $user->name = "Don Leon";
        $user->email = "don.leon@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0656321475';
        $user->image = "homme1.png";
        $user->description = "Je suis un développeur hors pair : Léon-Maker";
        $user->promo = "Bordeaux 2023";
        $user->skills = "HTML, CSS, JS, SQL, PHP";
        $user->status = "student";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Le J";
        $user->email = "le.j@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0675841258';
        $user->image = "homme2.png";
        $user->description = "Face It level 10, dev front end et souleveur de prof d'anglais";
        $user->promo = "Bordeaux 2023";
        $user->skills = "T O U T";
        $user->status = "student";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Magic_Pupu";
        $user->email = "magic.pupu@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0649751023';
        $user->image = "homme3.png";
        $user->description = "El big râleur, dev back end";
        $user->promo = "Bordeaux 2023";
        $user->skills = "jtebz";
        $user->status = "student";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Joe Biden";
        $user->email = "joe.biden@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0625741586';
        $user->image = "joebiden.png";
        $user->description = "président des usa";
        $user->promo = "Rouen 2023";
        $user->skills = "html, css";
        $user->status = "student";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Tatiana Rocher";
        $user->email = "tatiana.rocher@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0687451243';
        $user->image = "tat.png";
        $user->description = "Pilote des A2 2023 à Bordeaux";
        $user->promo = "Bordeaux 2023";
        $user->skills = "Mettre des fec";
        $user->status = "pilot";
        $user->save();
    }
}
