<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aclPermissaoModel extends Model
{
    protected $table = 'acl_permissao';
    protected $primaryKey = 'per_codigo';
}
