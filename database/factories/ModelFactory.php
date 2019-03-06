<?php

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});


$factory->define(App\Models\Car::class, function (Faker\Generator $faker) {

    //create variables required for seeding
    $rego = "";
    $total = DB::table('carModel')->get()->count();
    $car = (rand(1, $total));


    for ($i=0; $i < 3; $i++) { 
        $rego .= $faker->randomLetter;
    }

    for ($i=0; $i < 3; $i++) { 
        $rego .= $faker->randomDigit;
    }

    return [
        'rego' => $rego,
        'color' => $faker->safeColorName,
        'carModelId' => $car
    ];

   
});

