<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {

        for ($i=0; $i < 20; $i++) { 
            
            
            $newTrain = new Train();
            $newTrain->azienda = $faker->name();
            $newTrain->stazione_di_partenza = $faker->state();
            $newTrain->stazione_di_arrivo = $faker->state();
            $newTrain->orario_di_partenza = $faker->date() . ' ' . $faker->time();
            $newTrain->orario_di_arrivo = $faker->date() . ' ' . $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(5, true);
            $newTrain->numero_carrozze = $faker->randomDigitNotNull();
            $newTrain->in_orario = $faker->randomDigit();
            $newTrain->cancellato = $faker->randomDigit();
            $newTrain->save();
        }
    }
}
