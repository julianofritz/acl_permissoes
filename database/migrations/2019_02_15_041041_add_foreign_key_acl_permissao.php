<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyAclPermissao extends Migration
{
    public function up()
    {
        Schema::table('acl_permissao', function (Blueprint $table) {
            $table->unsignedInteger('rec_codigo')->change();
           // $table->dropColumn('rec_codigo');
            //$table->index('rec_codigo');
            $table->foreign('rec_codigo')->references('rec_codigo')->on('acl_recurso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acl_permissao', function (Blueprint $table) {
            $table->dropForeign(['rec_codigo']);
        });
    }
}
