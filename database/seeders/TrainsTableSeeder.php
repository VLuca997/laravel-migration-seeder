<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


//MODELS
use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void  //
    {

        Train::truncate();
        for($i = 0; $i < 10; $i++){
                $train = new Train();
                $train->company = fake()->company();
                $train->dep_station = fake()->city();
                $train->arr_station =  fake()->city();
                $train->dep_timestamp = fake()->dateTimeBetween('tomorrow', '+1 week');
                $train->arr_timestamp = fake()->dateTimeBetween('+1 week', '+5 weeks');
                $train->code = rand(1,99);
                $train->train_cars_number = rand(2,12);
                $train->in_time = fake()->boolean();
                $train->deleted = fake()->boolean();
                $train->save();//salva
        
        }

        // for($i = 0; $i > 10; $i++){
        //     $train = new Train();
        //     $train->company = fake()->company();
        //     $train->dep_station = fake()->city();
        //     $train->arr_station =  fake()->city();
        //     $train->dep_timestamp = fake()->dateTimeBetween('tomorrow', '+1 week');
        //     $train->arr_timestamp = fake()->dateTimeBetween('+1 week', '+5 weeks');
        //     $train->code = fake()->shuffle(fake()->bothify('?#?#?#'));
        //     $train->train_cars_number = rand(2,12);
        //     $train->in_time = fake()->boolean();
        //     $train->deleted = fake()->boolean();
        //     $train->save();//salva
        // }
    }
}
