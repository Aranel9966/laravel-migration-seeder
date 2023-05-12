<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->Azienda = $faker->name();
            $newTrain->Stazione_di_partenza = $faker->city();
            $newTrain->Stazione_di_arrivo = $faker->city();
            $newTrain->Orario_di_partenza = $faker->date('2023:m:d');
            $newTrain->Orario_di_arrivo = $faker->date('2023:m:d');
            $newTrain->Codice_Treno = $faker->randomNumber(4, true);
            $newTrain->Numero_Carrozze = $faker->randomNumber(4, true);
            $newTrain->In_orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
