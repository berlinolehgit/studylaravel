<?php

use Faker\Generator as Faker;
use App\Models\Offer;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'type_object' =>$faker->randomElement(['flat','house']),
        'price' => random_int(100,10000),
        'type_price' =>$faker-> randomElement(['USD','EUR','UAH']),
        'type_wall'=> $faker-> randomElement(['panel','brick']),
        'number_rooms' => random_int(1,4),
        'user_id' => random_int(1,13),
        'phone' => $faker->phoneNumber,
        'information' => $faker->text,
        'remember' => App\Models\Offer::REMEMBER_FALSE,
    ];
});
