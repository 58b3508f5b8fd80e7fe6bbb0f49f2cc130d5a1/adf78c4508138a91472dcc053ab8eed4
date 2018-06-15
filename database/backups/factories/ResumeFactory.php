<?php

use Faker\Generator as Faker;

$factory->define(App\Resume::class, function (Faker $faker) {
    return [
        //
        'resume_id'    => function () {
            return factory(App\User::class)->create()->user_id;
        },
        'cover_letter' => $faker->paragraphs(3, true),
    ];
});