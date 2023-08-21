<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kategoriProduk';
    protected $primaryKey       = 'idKategori';
    protected $returnType       = 'object';
    protected $allowedFields    = ['namaKategori', 'slugKategori'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggalInput';
    protected $updatedField  = 'tanggalUbah';
}
