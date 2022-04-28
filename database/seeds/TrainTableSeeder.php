<?php
use App\models\Train;
use Illuminate\Database\Seeder;
use Faker\generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {
        $aziende = ['TrenItalia', 'Italo', 'TrainEurope',];

        for ($i=0; $i < 50 ; $i++) { 
            
            $train = new Train();
            
            $train->azienda = $Faker->randomElement($aziende);
            $train->stazione_di_partenza = $Faker->city();
            $train->stazione_di_arrivo = $Faker->city();
            $train->orario_di_partenza = $Faker->dateTimeBetween('-1 week, +1 week');
            $train->orario_di_arrivo = $Faker->dateTimeBetween('-1 week, +1 week');
            $train->codice_treno = $Faker->bothify('??#?###?');
            $train->numero_carrozze = $Faker->randomNumber(1, 30);
            $train->in_orario = $Faker->boolean();
            $train->cancellato = $Faker->boolean();
    
            $train->save();
        };
    }
}
