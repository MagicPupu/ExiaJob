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
        $offer->company_name = 'Amazon';
        $offer->offer_name = 'Software dev';
        $offer->city = 'Bordeaux';
        $offer->duration = 4;
        $offer->price = 500;
        $offer->add_date = '2023-03-20';
        $offer->description = 'Développeur soft pour amazon';
        $offer->image = 'amazon.jpg';
        $offer->save();
    }
}
