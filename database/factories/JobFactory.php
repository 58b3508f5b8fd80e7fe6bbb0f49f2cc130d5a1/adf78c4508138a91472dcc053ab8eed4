<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        //
        'job_id'=>$faker->unique()->md5,
        'title'=>$faker->jobTitle,
        'country'=>'Nigeria',
        'state'=> $faker->randomElement(__('states.states')),
        'criteria'=>$faker->paragraph,
        'experience'=>$faker->numberBetween(0,10),
        'qualification'=>$faker->randomElement(['B.Sc','B.Tech','B.Eng','M.Sc']),
        'salary_from'=>$faker->numberBetween(30000,50000),
        'salary_to'=>$faker->numberBetween(50000,100000),
        'post_at'=>$faker->dateTimeBetween('-20 days','now'),
        'close_at'=>$faker->dateTimeBetween('now','20 days'),
    ];
});
//factory(App\Experience::class, 2500)->create();