<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'create new domain',
            'project_id' => 1,
        ]);

        DB::table('tasks')->insert([
            'title' => 'edit domain',
            'project_id' => 1,
        ]);
    }
}
