<?php

/** @var Factory $factory */

use App\Model\SiteContato;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(function (Faker $faker) {
    return [
        'nome'=> $faker->name,
        'email' => $faker->email,
        'telefone' => '(11) 99999-9999',
        'motivo_contato' => $faker->numberBetween(1, 3),
        'mensagem' => $faker->text(200)
    ];
}, SiteContato::class);
