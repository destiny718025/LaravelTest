<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(1, 1000),
        'game_num' => $faker->text(10),
        'game_date' => $faker->date('Y-m-d', 'now'),
        'game_open' => $faker->randomElement(['Y', 'N']),
        'open_time' => $faker->dateTime('', 'GMT'),
        'close_time' => $faker->dateTime('', 'GMT'),
        'game_final' => $faker->randomElement(['Y', 'N']),
        'game_over' => $faker->randomElement(['Y', 'N']),
    ];
});
