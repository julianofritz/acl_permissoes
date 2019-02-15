<?php

use Faker\Generator as Faker;

$factory->define(App\aclPermissaoModel::class, function (Faker $faker) {

    return [
        'per_nome' => 'index',
        'rec_codigo' => 1
    ];

});

