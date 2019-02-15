<?php

use Faker\Generator as Faker;

$factory->define(App\aclPrivilegioModel::class, function (Faker $faker) {
    return [
        'gru_codigo'  => 1,
        'rec_codigo'  => 3,
        'per_codigo'  => 3
     ];
});
