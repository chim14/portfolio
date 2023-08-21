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
        'idCustomer',
        'idProduk',
        'idUser',
        'invoicePemesanan',
        'qtyProduk',
        'totalHargaPemesanan',
        'notePemesanan',
        'tanggalPemesanan',
        'tanggalUbahPemesanan'
    ];

    public function getPemesananList()
    {
        $builder = $this->db->table('pemesanan');
        $builder->select('pemesanan.*, produk.kodeProduk, produk.namaProduk, produk.unitProduk, produk.hargaProduk, customer.namaCustomer');
        $builder->join('produk', 'produk.idProduk = pemesanan.idProduk', 'left');
        $builder->join('customer', 'customer.idCustomer = pemesanan.idCustomer', 'left');
        $query = $builder->get();
        return $query->getResult();
    }


    public function invoiceNo()
    {
        $query = $this->db->query("SELECT MAX(MID(invoicePemesanan, 9, 4)) AS invoiceNo
        FROM pemesanan WHERE
        MID(invoicePemesanan, 3, 6) = DATE_FORMAT(CURDATE(), '%y%m%d')");

        if ($query->getNumRows() > 0) {
            $row = $query->getRow();
            $n = ((int)$row->invoiceNo) + 1;
            $no = sprintf('%04d', $n);
        } else {
            $no = "0001";
        }
        $invoicePemesanan = "JKT" . date('ymd') . $no;
        return $invoicePemesanan;
    }

    // public function calculateTotalHargaProduk($qtyPemesanan, $hargaProduk)
    // {
    //     return $qtyPemesanan * $hargaProduk;
    // }
}
