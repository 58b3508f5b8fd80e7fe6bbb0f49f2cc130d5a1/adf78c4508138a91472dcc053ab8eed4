<?php

use Faker\Generator as Faker;

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        //
        'resume_id'=>$faker->unique()->md5,
        'title'=>$faker->randomElement(__('skills.skills')),
        'percentage'=>$faker->numberBetween(50,100),
    ];
});
//factory(App\Honor::class, 2500)->create();