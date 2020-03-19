<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'HDMS',
            'description' => 'Hosting Domain Management System',
        ]);

        DB::table('projects')->insert([
            'name' => 'WEQuiz',
            'description' => 'WE online Quiz System',
        ]);

    }
}
