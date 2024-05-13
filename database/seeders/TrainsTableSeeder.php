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
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->image = $faker->imageUrl(400, 400, 'cities', true, $train->arrival_station, false, 'jpg');
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->dateTimeBetween('-1 month', '+30 days')->format('Y-m-d');
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomNumber(7, true);
            $train->carriages_number = $faker->numberBetween(1, 10);
            $train->in_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
        // $trains = config('db.trains');

        // foreach ($trains as $train) {
        //     $newTrain = new Train();
        //     $newTrain->company = $train['company'];
        //     $newTrain->departure_station = $train['departure_station'];
        //     $newTrain->arrival_station = $train['arrival_station'];
        //     $newTrain->departure_date = $train['departure_date'];
        //     $newTrain->departure_time = $train['departure_time'];
        //     $newTrain->arrival_time = $train['arrival_time'];
        //     $newTrain->train_code = $train['train_code'];
        //     $newTrain->carriages_number = $train['carriages_number'];
        //     $newTrain->in_time = $train['in_time'];
        //     $newTrain->cancelled = $train['cancelled'];
        //     $newTrain->save();
        // }
    }
}
