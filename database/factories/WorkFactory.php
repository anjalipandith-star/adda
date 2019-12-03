<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Work;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Work::class, function (Faker $faker) {
    return [
        'geolocation' => $faker->sentence(),
        'date' => $faker->dateTimeBetween('-30 years', 'now')
    ];
});