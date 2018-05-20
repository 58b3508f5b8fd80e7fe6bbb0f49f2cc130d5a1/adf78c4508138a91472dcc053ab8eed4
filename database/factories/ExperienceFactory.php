<?php

use Faker\Generator as Faker;

$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        //
        'resume_id'   => $faker->unique()->md5,
        'title'       => $faker->jobTitle,
        'company'     => $faker->company,
        'description' => $faker->paragraph,
        'started_at'  => $faker->dateTimeBetween('-10 years', '-4 years'),
        'finished_at' => $faker->dateTimeBetween('-3 years', 'now'),
    ];
});
//factory(App\Experience::class, 2500)->create();