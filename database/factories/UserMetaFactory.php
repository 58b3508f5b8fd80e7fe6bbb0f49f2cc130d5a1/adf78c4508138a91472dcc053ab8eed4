<?php

use Faker\Generator as Faker;

$factory->define(App\User_meta::class, function (Faker $faker) {
    return [
        //
        'user_id'        => $faker->unique()->md5,
        'username'    => $faker->unique()->userName,
        'first_name'  => $faker->firstName(),
        'last_name'   => $faker->lastName(),
        'email'       => $faker->unique()->safeEmail,
        'dob'         => $faker->dateTimeBetween('-35 years', '-20 years'),
        'description' => $faker->paragraphs(2, true),
        'address'=>$faker->address,
        'phone_no'=>$faker->phoneNumber,
        'country'     => 'Nigeria',
        'state'       => $faker->randomElement(__('states.states')),
        'experience'=>$faker->numberBetween(0,10),
        'current_salary'=>$faker->numberBetween(30000,50000),
        'expected_salary'=>$faker->numberBetween(50000,100000),

    ];
});
