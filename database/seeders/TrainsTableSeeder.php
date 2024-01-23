<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 5; $i++) {
            $nuovoTreno = new Train();
            $nuovoTreno->Azienda = $faker->words(1, true);
            $nuovoTreno->Stazione_di_partenza = $faker->sentence(4);
            $nuovoTreno->Stazione_di_arrivo = $faker->sentence(4);
            $nuovoTreno->Orario_di_partenza = $faker->dateTime();
            $nuovoTreno->Orario_di_arrivo = $faker->dateTime();
            $nuovoTreno->Codice_Treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $nuovoTreno->Numero_Carrozze = $faker->randomNumber(2, false);
            $nuovoTreno->In_orario = $faker->boolean();
            $nuovoTreno->Cancellato = $faker->boolean();
            $nuovoTreno->save();
        }
    }
}
