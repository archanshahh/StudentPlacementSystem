<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\PlacementOfficer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mobile' => $faker->phoneNumber,
        'specialization' => $faker->jobTitle,
    ];
});
