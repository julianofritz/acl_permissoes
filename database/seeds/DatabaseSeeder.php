<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AclGrupoSeeder::class);
        //$this->call(AclRecursoSeeder::class);
        //$this->call(AclPermissaoSeeder::class);
        $this->call(AclPrivilegioSeeder::class);
    }
}
