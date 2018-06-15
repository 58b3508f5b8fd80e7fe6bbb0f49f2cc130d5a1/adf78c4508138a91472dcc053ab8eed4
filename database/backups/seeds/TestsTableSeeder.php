<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
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
        foreach (range(1, 25) as $index) {
            DB::table('tests')->insert([
                'test_id'     => $faker->unique()->md5,
                'title'       => $faker->realText(20),
                'description' => $faker->realText(1024),
                'duration'    => 3,
                'length'      => $faker->numberBetween(10, 20),
                'created_by'  => 'ba0a623ff3a04531a99362914b20563e'
            ]);
        }
    }
}
