<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('students')->insert([
            'name' => \Illuminate\Support\Str::random(10),
            'age' => rand(5, 25),
            'class' => rand(1, 12),
            'roll' => rand(1, 1000),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
