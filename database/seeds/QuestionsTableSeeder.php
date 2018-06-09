<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        $test = \App\Test::all()->pluck('test_id')->toArray();
        $options = ['a', 'b', 'c', 'd'];
        foreach (range(1, 1500) as $index) {
            DB::table('questions')->insert([
                'question_id' => $faker->unique()->md5,
                'test_id'     => $faker->randomElement($test),
                'question'    => $faker->realText(300),
                'option_a'    => $faker->realText(25),
                'option_b'    => $faker->realText(25),
                'option_c'    => $faker->realText(25),
                'option_d'    => $faker->realText(25),
                'answer'      => $faker->randomElement($options),
            ]);

        }
    }
}
