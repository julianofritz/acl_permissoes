<?php

use Faker\Generator as Faker;

$factory->define(\App\aclGrupoModel::class, function (Faker $faker) {
    return [
        'gru_nome' => 'Administrativo'
    ];

});
