<?php

use Faker\Generator as Faker;

require_once __DIR__ . '/../faker_data/gera_recursos.php';

$factory->define(App\aclRecursoModel::class, function (Faker $faker) {

    $recursos = geraRecursos();

    return [
        'rec_nome' => array_random($recursos)
    ];
});
