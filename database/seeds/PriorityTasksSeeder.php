<?php

use Illuminate\Database\Seeder;

class PriorityTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priority_tasks')->insert([
            'title' => 'abc'
        ]);
        DB::table('priority_tasks')->insert([
            'title' => 'Нормально'
        ]);
        DB::table('priority_tasks')->insert([
            'title' => 'Сделаю на днях'
        ]);
    }
}
