<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produk';
    protected $primaryKey       = 'idProduk';
    protected $returnType       = 'object';
    protected $allowedFields    = ['kodeProduk', 'namaProduk', 'idKategori', 'unitProduk', 'hargaProduk',];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggalInputProduk';
    protected $updatedField  = 'tanggalUbahProduk';

    function getAll()
    {
    }
}
