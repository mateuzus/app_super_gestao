<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'email' => $faker->email,
        'phone' => '(11) 99999-9999',
        'reason_contact' => $faker->numberBetween(1, 3),
        'message' => $faker->text(200)
    ];
});
