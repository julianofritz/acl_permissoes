<?php

use Illuminate\Database\Seeder;

class AclPermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\aclPermissaoModel::class, 1)->create();
    }
}
