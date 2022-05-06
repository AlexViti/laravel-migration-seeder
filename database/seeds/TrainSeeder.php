<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 500; $i++) {
            $date = $faker->dateTimeBetween('-1 day', '+1 day');
            $date2 = clone $date;
            $date2->add(new DateInterval('PT' . $faker->numberBetween(1, 10) . 'H'))->add(new DateInterval('PT' . $faker->numberBetween(0, 59) . 'M'));
            $train = new Train();
            $train->fill([
                'company' => $faker->company,
                'code' => $faker->unique()->numberBetween(10000, 99999),
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $date,
                'arrival_time' => $date2,
                'coaches' => $faker->numberBetween(4, 10),
                'seats' => $faker->numberBetween(100, 500),
                'price' => $faker->numberBetween(500, 1000),
            ])->save();
        }
    }
}
