<?php

use Illuminate\Database\Seeder;

class AclPrivilegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\aclPrivilegioModel::class, 1)->create();
    }
}
