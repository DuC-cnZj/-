<?php

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\SubCompany::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'addr' => $faker->address,
        'phone' => $faker->randomNumber,
        'email' => $faker->email,
        'description' => $faker->sentence
    ];
});

$factory->define(App\Substation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'addr' => $faker->address,
        'phone' => $faker->randomNumber,
        'email' => $faker->email,
        'description' => $faker->sentence,
        'sub_company_id'=> 1
    ];
});

$factory->define(App\Courier::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'addr' => $faker->address,
        'phone' => $faker->randomNumber,
        'age' => $faker->randomNumber,
        'substation_id' => 5,
    ];
});
