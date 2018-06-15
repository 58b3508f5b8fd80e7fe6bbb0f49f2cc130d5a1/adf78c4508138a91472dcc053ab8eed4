<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
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
        $questions = \App\Test_question::all()->pluck('test_id')->toArray();
        $resumes = \App\Resume::limit(50)->pluck('test_id')->toArray();
        $options = ['a', 'b', 'c', 'd'];
        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'question_id'    => $faker->randomElement($questions),
                'resume_id'      => $faker->randomElement($resumes),
                'given_answer'   => $faker->randomElement($options),
                'correct_answer' => $faker->randomElement($options),
            ]);
        }
    }
}
