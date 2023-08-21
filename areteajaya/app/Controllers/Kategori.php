<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
    public function kategori()
    {
        $data = [
            'title' => 'Kategori Produk',
            'daftar_kategori' => $this->KategoriModel->orderBy('idKategori', 'DESC')->findAll()
        ];

        return view('admin/pages/kategori', $data);
    }

    public function store()
    {
        $data = [
            'namaKategori' => esc($this->request->getPost('namaKategori')),
        ];
        $namaKategori = esc($this->request->getPost('namaKategori'));
        $slug = url_title($namaKategori, '-', TRUE);
        $data['slugKategori'] = $slug;
        $this->KategoriModel->insert($data);
        return redirect()->back()->with('success', 'Data Kategori Produk "' . $namaKategori . '" Berhasil di Tambahkan');
    }

    public function update($idKategori)
    {
        $data = [
            'namaKategori' => esc($this->request->getPost('namaKategori')),
        ];
        $namaKategori = esc($this->request->getPost('namaKategori'));
        $slug = url_title($namaKategori, '-', TRUE);
        $data['slugKategori'] = $slug;
        $kategori = $this->KategoriModel->find($idKategori);
        $this->KategoriModel->update($idKategori, $data);
        return redirect()->back()->with('success', 'Data Kategori Produk "' . $kategori->namaKategori . '" Berhasil di Ubah');
    }

    public function destroy($idKategori)
    {

        $kategori = $this->KategoriModel->find($idKategori);
        $this->KategoriModel->where('idKategori', $idKategori)->delete();
        return redirect()->back()->with('success', 'Data Kategori Produk "' . $kategori->namaKategori . '" Berhasil di Hapus');
    }
}
