<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pemesanan extends BaseController
{
    public function pemesanan()
    {
        $data = [
            'title' => 'Daftar Pesanan',
            'daftar_pemesanan' => $this->PemesananModel->getPemesananList(),
            'daftar_produk' => $this->ProdukModel->findAll(),
            'daftar_customer' => $this->CustomerModel->findAll(),
            'invoicePemesanan' => $this->PemesananModel->invoiceNo() //menampilkan invoice otomatis
        ];
        return view('admin/pages/pemesanan', $data);
    }

    public function store()
    {
        var_dump($_POST);

        $this->validate([
            'tanggalPemesanan' => 'required|valid_date'
        ]);

        $invoiceNumber = $this->PemesananModel->invoiceNo();

        $tanggalPemesanan = $this->request->getPost('tanggalPemesanan');
        $formattedTanggal = date('Y-m-d', strtotime($tanggalPemesanan));

        $data = [
            'invoicePemesanan' => $invoiceNumber,
            'tanggalPemesanan' => $formattedTanggal,
            'idCustomer' => $this->request->getPost('idCustomer'),
            'idProduk' => $this->request->getPost('idProduk'),
            'unitProduk' => $this->request->getPost('unitProduk'),
            'hargaProduk' => $this->request->getPost('hargaProduk'),
            'qtyProduk' => $this->request->getPost('qtyProduk'),
            'totalHargaProduk' => intval($this->request->getPost('qtyProduk')) * intval($this->request->getPost('hargaProduk'))
        ];

        $this->PemesananModel->insert($data);

        return redirect()->back()->with('success', 'Data Pemesanan berhasil ditambahkan');
    }


    public function edit()
    {
        $data = [
            'title' => 'Edit Pemesanan',
            'daftar_pemesanan' => $this->PemesananModel->getPemesananList(),
            'daftar_produk' => $this->ProdukModel->findAll(),
            'daftar_customer' => $this->CustomerModel->findAll(),
            'invoicePemesanan' => $this->PemesananModel->invoiceNo(),
            // 'calculateTotalHargaProduk' => $this->PemesananModel->totalHargaProduk()
        ];
        return view('admin/pages/editpemesanan', $data); // Make sure the view path is correct
    }
    //ubah pemesanan produk
    public function destroy($idPemesanan)
    {
        // $pemesanan = $this->PemesananModel->fin($idPemesanan);
        $this->PemesananModel->where('idPemesanan', $idPemesanan)->delete();
        return redirect()->back()->with('success', 'Data pemesanan Customer Berhasil di Hapus');
        // return redirect()->back()->with('success', 'Data pemesanan Customer "' . $pemesanan->namaCustomer . '" Berhasil di Hapus');
    }
}
