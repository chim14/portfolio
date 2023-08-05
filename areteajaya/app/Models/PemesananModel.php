<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pemesanan';
    protected $primaryKey       = 'idPemesanan';
    protected $returnType       = 'object';
    protected $allowedFields = [
        'typePemesanan',
        'invoicePemesanan',
        'qtyPemesanan',
        'totalHargaPemesanan',
        'tanggalRequestPemesanan',
        'tanggalPemesanan',
        'tanggalUbahPemesanan'
    ];
}
