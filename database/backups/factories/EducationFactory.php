<?php

use Faker\Generator as Faker;

$factory->define(App\Education::class, function (Faker $faker) {
    return [
        //
        'resume_id'     => $faker->unique()->md5,
        'title'         => $faker->randomElement(__('courses.courses')),
        'institution'   => $faker->randomElement(__('universities.universities')),
        'description'   => $faker->paragraph,
        'qualification' => $faker->randomElement([
            'B.Sc',
            'B.Tech',
            'B.Eng',
            'M.Sc'
        ]),
        'started_at'=>$faker->dateTimeBetween('-15 years','4 years'),
    ];
});
//factory(App\Education::class, 340)->create();

