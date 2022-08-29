<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\site_contato;
use Faker\Generator as Faker;

$factory->define(site_contato::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->e164PhoneNumber,
        'email' => $faker->unique->email,
        'motivo_contato' => $faker->numberBetween(1,3),
        'mensagem' => $faker->text(300),
    ];
});
