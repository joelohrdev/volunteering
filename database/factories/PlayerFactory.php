<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use App\User;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'name' => $faker->name,
        'coach' => $faker->name,
    ];
});
