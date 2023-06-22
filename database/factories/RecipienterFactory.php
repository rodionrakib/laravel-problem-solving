<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Recipienter;

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Recipienter::class, function (Faker $faker) {
    return [
        'email' => $faker->safeEmail,
        'password' => Hash::make('password')
    ];
});
