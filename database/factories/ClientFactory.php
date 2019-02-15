<?php

use Faker\Generator as Faker;

require_once __DIR__ . '/../faker_data/gera_grupos.php';

$factory->define(App\Client::class, function (Faker $faker) {
    $cpfs = cpfs();

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'defaulter' => rand(0,1),
        'date_birth' => $faker->date(),
        'gender' => rand(1,10)%2==0 ? 'm' : 'f',
        'marital_status' => rand(1,3),
        'physical_disability' => rand(1,10)%2==0 ? $faker->word : null,
        'document_number' => array_rand($cpfs, 1)
    ];
});
