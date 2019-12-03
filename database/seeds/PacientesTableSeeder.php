<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 5; $i++) {
            \DB::table('pacientes')->insert(array(
                'name' => $faker->unique()->randomElement(['Blanca','Ainhoa','Luci','Angel','Andrea']),
                'surname'  => $faker->unique()->randomElement(['Velasco','Heras','García','Carrillo','Remesal']),
                'nuhsa' => $faker->unique()->randomElement($array = array ('AN1000038583','AN0408397178','AN0326435212','AN0404408155','AN0415331870'))
            ));

        }
    }
}
