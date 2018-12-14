<?php

use Faker\Generator as Faker;

$factory->define(App\Child::class, function (Faker $faker) {
    $childminder = App\User::first();
    return [
        'childminder_id' => $childminder->id,
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'date_of_birth'  => Carbon\Carbon::now()->subYears(rand(0,4))->subMonths(rand(0, 12))->subDays(rand(0, 364))
    ];
});
