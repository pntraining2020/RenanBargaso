<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'middle_name' => $faker->name,
        'last_name' => $faker->name,
    ];
});
