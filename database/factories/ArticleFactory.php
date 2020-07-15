<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'email' => $faker->email,
    ];
});
