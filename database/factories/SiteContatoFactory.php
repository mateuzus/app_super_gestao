<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'nome'=> $faker->name,
        'email' => $faker->email,
        'telefone' => '(11) 99999-9999',
        'motivo_contato' => $faker->numberBetween(1, 3),
        'mensagem' => $faker->text(200)
    ];
});
