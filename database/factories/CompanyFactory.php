<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->domainWord,
        'description' => $faker->text(100),
        'industry' => $faker->domainWord,
        'email' => $faker->unique()->companyEmail,
        'mobile' => $faker->phoneNumber,
        'website' => $faker->domainName,
        'location' => $faker->streetAddress . ", " . $faker->state,
    ];
});
