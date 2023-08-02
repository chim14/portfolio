<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\KategoriModel;

class ProductCategoryController extends BaseController
{
    public function productcategory()
    {
        $data = [
            'title' => 'Kategori Produk',
            'daftar_kategori' => $this->KategoriModel->orderBy('idKategori', 'DESC')->findAll()
        ];

        return view('admin/pages/productcategory', $data);
    }

    //tambah kategori produk
    // Add a new category ("kategori produk") to the database
    public function store()
    {
        $data = [
            'namaKategori' => esc($this->request->getPost('namaKategori')),
        ];
        // Get the updated "namaKategori" from the form
        $namaKategori = esc($this->request->getPost('namaKategori'));
        // Generate a URL-friendly slug from the updated "namaKategori" input
        $slug = url_title($namaKategori, '-', TRUE);
        // Add the slug to the data array
        $data['slugKategori'] = $slug;
        // add data to database
        $this->KategoriModel->insert($data);
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Kategori Produk "' . $namaKategori . '" Berhasil di Tambahkan');
    }
    //ubah kategori produk
    public function update($idKategori)
    {
        // Prepare the data to be updated in the database
        $data = [
            'namaKategori' => esc($this->request->getPost('namaKategori')),
        ];
        // Get the updated "namaKategori" from the form
        $namaKategori = esc($this->request->getPost('namaKategori'));
        // Generate a URL-friendly slug from the updated "namaKategori" input
        $slug = url_title($namaKategori, '-', TRUE);
        // Add the slug to the data array
        $data['slugKategori'] = $slug;
        // Get the category name for the success message
        $kategori = $this->KategoriModel->find($idKategori);
        // Update the data in the database using the KategoriModel
        $this->KategoriModel->update($idKategori, $data);
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Kategori Produk "' . $kategori->namaKategori . '" Berhasil di Ubah');
    }
    //ubah kategori produk
    public function destroy($idKategori)
    {
        // Get the category name for the success message
        $kategori = $this->KategoriModel->find($idKategori);
        // Delete the category from the database
        $this->KategoriModel->where('idKategori', $idKategori)->delete();
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Kategori Produk "' . $kategori->namaKategori . '" Berhasil di Hapus');
    }
}
