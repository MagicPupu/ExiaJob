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
        $user->name = "Léon De Fonrocque";
        $user->email = "don.leon@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0656321475';
        $user->image = "leondefronrocque.png";
        $user->description = "Actuellement en 2ème année en classe préparatoire intégrée dans une école d’ingénieur, je recherche un stage en milieu professionnel pour une durée d’environ 3 mois, de début avril à mi-juillet.";
        $user->centre = "Bordeaux";
        $user->promo = "CPI A2 Info";
        $user->first_skill = "Développement Web";
        $user->second_skill = "Réseau";
        $user->third_skill = "FrontEnd";
        $user->status = "student";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Julien Gaborieau";
        $user->email = "le.j@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0675841258';
        $user->image = "juliengaborieau.png";
        $user->description = "En deuxième année de cycle préparatoire ingénieur mineure informatique à CESI Bordeaux. Je suis intéressé par les domaines de développement logiciel, intelligence artificielle et cybersécurité";
        $user->centre = "Bordeaux";
        $user->promo = "CPI A2 Info";
        $user->first_skill = "Développement Objet";
        $user->second_skill = "Backend";
        $user->third_skill = "Full Stack";
        $user->status = "student";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Antoine Pulon";
        $user->email = "magic.pupu@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0649751023';
        $user->image = "antoinepulon.png";
        $user->description = "Actuellement en deuxième année d'école d'ingénieur informatique, je suis intéressé par la cybersécurité.";
        $user->centre = "Bordeaux";
        $user->promo = "CPI A2 Info";
        $user->first_skill = "Laravel";
        $user->second_skill = "PHP";
        $user->third_skill = "Python";
        $user->status = "student";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Roméo Boesh";
        $user->email = "joe.biden@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0625741586';
        $user->image = "romeoboesh.png";
        $user->description = "Étudiant en informatique à CESI Bordeaux.";
        $user->centre = "Bordeaux";
        $user->promo = "CPI A2 Info";
        $user->first_skill = "Figma";
        $user->second_skill = "Frontend";
        $user->third_skill = "HTML/CSS";
        $user->status = "student";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Tatiana Rocher";
        $user->email = "tatiana.rocher@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0687451243';
        $user->image = "tat.png";
        $user->description = "Pilote des A2 2023 à Bordeaux";
        $user->centre = "Bordeaux";
        $user->promo = "CPI A1, CPI A2 Info, CPI A3 Info";
        $user->first_skill = "Développement web";
        $user->second_skill = "Développement objet";
        $user->third_skill = "Tuteur";
        $user->status = "pilot";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "Zeineb El Khalfi";
        $user->email = "zeineb.elkhalfi@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0656324875';
        $user->image = "zeinebelkhalfi.png";
        $user->description = "Tuteur, chercheur à CESI Bordeaux.";
        $user->centre = "Bordeaux";
        $user->promo = "Aucune";
        $user->first_skill = "Développement web";
        $user->second_skill = "HTML";
        $user->third_skill = "JS";
        $user->status = "pilot";
        $user->save();

        $user = new \App\Models\User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; //password
        $user->phone = '0000000000';
        $user->image = "admin.png";
        $user->description = "admin";
        $user->centre = "admin";
        $user->promo = "admin";
        $user->status = "admin";
        $user->save();
    }
}
