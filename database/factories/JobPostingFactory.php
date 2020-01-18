<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\JobPosting::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'description' => $faker->text(100),
        'start_date' => $faker->date('Y-m-d'),
        'application_deadline' => date('Y-m-d'),
//        'company_id' => $faker->numberBetween(101, 125),
        'company_id' => factory(App\Company::class),
        'recruiter_name' => $faker->name
    ];
});
