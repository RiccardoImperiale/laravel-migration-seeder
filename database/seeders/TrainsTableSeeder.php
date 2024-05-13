<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->id();
        // $table->string('company', 255)->nullable();
        // $table->string('departure_station', 50);
        // $table->string('arrival_station', 50);
        // $table->time('departure_time', 0);
        // $table->time('arrival_time', 0);
        // $table->unsignedMediumInteger('train_code');
        // $table->unsignedTinyInteger('carriages_number')->nullable();
        // $table->boolean('in_time')->nullable();
        // $table->boolean('cancelled')->nullable();
        // $table->timestamps();

        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Varese Nord',
                'departure_date' => '2024-05-01',
                'departure_time' => '14:25:00',
                'arrival_time' => '15:40:00',
                'train_code' => '243577',
                'carriages_number' => 9,
                'in_time' => 0,
                'cancelled' => 1,
            ],
            [
                'company' => 'National Rail',
                'departure_station' => 'Fairbourne',
                'arrival_station' => 'Eaglescliffe',
                'departure_date' => '2024-05-31',
                'departure_time' => '15:03:00',
                'arrival_time' => '22:10:00',
                'train_code' => '764876',
                'carriages_number' => 8,
                'in_time' => 1,
                'cancelled' => 0,
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Tradate',
                'arrival_station' => 'Laveno Nord',
                'departure_date' => '2024-06-29',
                'departure_time' => '09:02:00',
                'arrival_time' => '10:00:00',
                'train_code' => '19384',
                'carriages_number' => 6,
                'in_time' => 0,
                'cancelled' => 0,
            ],

        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_date = $train['departure_date'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriages_number = $train['carriages_number'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save();
        }
    }
}
