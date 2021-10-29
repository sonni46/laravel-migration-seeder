<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
       for($i = 0; $i < 50; $i++) {
        $data_trip = new Trip();
        $data_trip->name_destination = $faker->city();
        $data_trip->departure = $faker->city();
        $data_trip->return = $faker->city();
        $data_trip->price = $faker->randomNumber(4, false);
        $data_trip->save();
       }
    }
}
