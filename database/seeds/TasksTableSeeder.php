<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++)
        {
            DB::table('tasks')->insert([
                'user_id' => 1,
                'title' => $faker->name,
                'description' => $faker->text(),
                'date_end' => '',
            ]);
        }
    }
}
