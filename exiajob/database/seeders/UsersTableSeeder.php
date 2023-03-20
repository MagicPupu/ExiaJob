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
        $user->save();
    }
}
