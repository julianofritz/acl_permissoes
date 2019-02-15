<?php

use Illuminate\Database\Seeder;

class AclGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\aclGrupoModel::class)->create();
    }
}
