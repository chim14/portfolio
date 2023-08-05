<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'customer';
    protected $primaryKey       = 'idCustomer';
    protected $returnType       = 'object';
    protected $allowedFields    = ['namaCustomer', 'noCustomer', 'emailCustomer', 'alamatCustomer'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'tanggalInput';
    // protected $updatedField  = 'tanggalUbah';
}
