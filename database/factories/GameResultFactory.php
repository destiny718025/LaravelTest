<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GameResult;
use Faker\Generator as Faker;

$factory->define(GameResult::class, function (Faker $faker) {
    return [
        'game_id' => $faker->numberBetween(1, 1000),
        'num1' => $faker->numberBetween(0, 9),
        'num2' => $faker->numberBetween(0, 9),
        'num3' => $faker->numberBetween(0, 9),
        'num4' => $faker->numberBetween(0, 9),
    ];
});
