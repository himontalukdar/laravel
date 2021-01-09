<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$dept_array = ["CSE", "BBA", "EEE", "LAW", "PHARMACY", "ARCHITECTURE"];
$factory->define(Teacher::class, function (Faker $faker) use ($dept_array) {
    return [
        'name' => $faker->name,
        'age' => rand(20, 100),
        'qualification' => Str::random(10),
        'department' => $dept_array[rand(0, 5)],
    ];
});
