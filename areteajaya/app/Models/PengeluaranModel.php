<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengeluaran';
    protected $primaryKey       = 'idPengeluaran';
    protected $returnType       = 'object';
    protected $allowedFields    = ['namaPengeluaran', 'typePengeluaran', 'jumlahPengeluaran', 'tanggalPengeluaran', 'notePengeluaran'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'tanggalPengeluaran';
}
