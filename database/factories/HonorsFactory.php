<?php

use Faker\Generator as Faker;

$factory->define(App\Honor::class, function (Faker $faker) {
    return [
        //
        'resume_id'   => $faker->unique()->md5,
        'title'       => $faker->jobTitle,
        'received_at' => $faker->dateTimeBetween('-10 years', '-2 years'),
        'company'     => $faker->company,
        'description' => $faker->text
    ];
});
