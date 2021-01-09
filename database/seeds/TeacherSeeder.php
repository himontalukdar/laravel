<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dept_array = ["CSE", "BBA", "EEE", "LAW", "PHARMACY", "ARCHITECTURE"];
        DB::table('teachers')->insert([
            'name' => Str::random(10),
            'age' => rand(20, 100),
            'qualification' => Str::random(10),
            'department' => $dept_array[rand(0, 5)],
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
