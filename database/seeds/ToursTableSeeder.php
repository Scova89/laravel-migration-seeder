<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tour;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tour = new Tour();

        $tour->name = $faker->catchPhrase();
        $tour->country = $faker->country();
        $tour->city = $faker->city();
        $tour->description = $faker->text(500);
        $tour->people = $faker->randomDigit();
        $tour->fly_included = $faker->numberBetween(0, 1);
        $tour->price = $faker->randomFloat(2, 1000);
        $tour->discount = $faker->randomFloat(2, 1000);
        $tour->arrival = $faker->dateTimeThisMonth();
        $tour->departure = $faker->dateTimeThisMonth('+12 days');


        $tour->save();
    }
}
