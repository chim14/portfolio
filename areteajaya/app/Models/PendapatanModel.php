<?php

namespace App\Models;

use CodeIgniter\Model;

class PendapatanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pendapatan';
    protected $primaryKey       = 'idPendapatan';
    protected $returnType       = 'object';
    protected $allowedFields    = ['invoicePemesanan', 'namaCustomer', 'jumlahPendapatan', 'tanggalPendapatan',];
}
