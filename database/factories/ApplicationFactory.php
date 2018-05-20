<?php

use Faker\Generator as Faker;

$factory->define(App\Application::class, function (Faker $faker) {
    return [
        //
        'application_id'=>$faker->unique()->md5,
        'resume_id'=>$faker->unique()->md5,
        'job_id'=>$faker->unique()->md5,
    ];
});
//factory(App\Education::class, 1000)->create();