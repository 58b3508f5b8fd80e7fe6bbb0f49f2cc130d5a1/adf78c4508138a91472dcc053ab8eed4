<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
/*factory(App\Skill::class, 2500)->create();*/
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'user_id'     => function () {
            return factory(App\User_meta::class)->create()->user_id;
        },
        'username'       => $faker->unique()->userName,
        'first_name'     => $faker->firstName(),
        'last_name'      => $faker->lastName(),
        'email'          => $faker->unique()->safeEmail,
        'password'       => \Illuminate\Support\Facades\Hash::make('tarzan'),
        'remember_token' => str_random(10),
        'access'         => $faker->numberBetween(0, 4),
        'type'           => $faker->randomElement(['user', 'staff']),
        'status'         => $faker->randomElement(['pending', 'active']),
    ];
});
