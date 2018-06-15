<?php

use Illuminate\Database\Seeder;

class Job_testsTableSeeder extends Seeder
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
        $test = \App\Online_test::all()->pluck('test_id')->toArray();
        $jobs = \App\Job::all()->pluck('job_id')->toArray();
        foreach ($jobs as $job) {
            \Illuminate\Support\Facades\DB::table('job_tests')->insert([
                'job_test_id' => $faker->unique()->md5,
                'job_id'     => $job,
                'test_id'     => $faker->randomElement($test),
            ]);

        }
    }
}
