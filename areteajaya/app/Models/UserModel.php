<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'idUser';
    protected $returnType       = 'object';
    protected $allowedFields    = ['namaUser', 'posisiUser', 'emailUser', 'passwordUser'];
}
