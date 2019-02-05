<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index) {
            DB::table('person')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'age' => $faker->numberBetween(15,80),
                'salary' => (string)$faker->numberBetween(1000,10000),
            ]);
        }
    }
}
