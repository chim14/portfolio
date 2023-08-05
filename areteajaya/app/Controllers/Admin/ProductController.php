<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProductController extends BaseController
{

    public function product()
    {
        $data = [
            'title' => 'Daftar Produk',
            'daftar_produk' => $this->ProdukModel->orderBy('idProduk', 'DESC')->findAll(),
            'kategori_produk' => $this->KategoriModel->findAll() // Fixed the typo "findAdll()" to "findAll()"
        ];

        return view('admin/pages/product', $data);
    }
    //tambah kategori produk
    // Add a new category ("kategori produk") to the database
    public function store()
    {
        $data = [
            'kodeProduk' => esc($this->request->getPost('kodeProduk')),
            'namaProduk' => esc($this->request->getPost('namaProduk')),
            'idKategori' => esc($this->request->getPost('idKategori')),
            'unitProduk' => esc($this->request->getPost('unitProduk')),
            'hargaProduk' => esc($this->request->getPost('hargaProduk')),
        ];
        $namaProduk = esc($this->request->getPost('namaProduk'));
        // add data to database
        $this->ProdukModel->insert($data);
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Produk "' . $namaProduk . '" Berhasil di Tambahkan');
    }
    //ubah kategori produk
    public function update($idProduk)
    {
        // Prepare the data to be updated in the database
        $data = [
            'kodeProduk' => esc($this->request->getPost('kodeProduk')),
            'namaProduk' => esc($this->request->getPost('namaProduk')),
            'idKategori' => esc($this->request->getPost('idKategori')),
            'unitProduk' => esc($this->request->getPost('unitProduk')),
            'hargaProduk' => esc($this->request->getPost('hargaProduk')),
        ];
        // Get the category name for the success message
        $produk = $this->ProdukModel->find($idProduk);
        // Update the data in the database using the KategoriModel
        $this->ProdukModel->update($idProduk, $data);
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Produk "' . $produk->namaProduk . '" Berhasil di Ubah');
    }
    //ubah kategori produk
    public function destroy($idProduk)
    {
        // Get the category name for the success message
        $produk = $this->ProdukModel->find($idProduk);
        // Delete the category from the database
        $this->ProdukModel->where('idProduk', $idProduk)->delete();
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Produk "' . $produk->namaProduk . '" Berhasil di Hapus');
    }
    // Controller
    public function printList()
    {
        $data = [
            'daftar_produk' => $this->ProdukModel->orderBy('idProduk', 'DESC')->findAll(),
            'kategori_produk' => $this->KategoriModel->findAll()
        ];

        return view('product_print', $data);
    }
}
