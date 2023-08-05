<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PemesananController extends BaseController
{
    public function pemesanan()
    {
        $data = [
            'title' => 'Daftar Pesanan',
            'daftar_pemesanan' => $this->PemesananModel->orderBy('idPemesanan', 'DESC')->findAll()
        ];
        return view('admin/pages/pemesanan', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Buat Pemesanan',
        ];
        return view('admin/pages/createpemesanan', $data); // Make sure the view path is correct
    }
    public function edit()
    {
        $data = [
            'title' => 'Edit Pemesanan',
        ];
        return view('admin/pages/editpemesanan', $data); // Make sure the view path is correct
    }
    //ubah pemesanan produk
    public function destroy($idPemesanan)
    {
        // Get the category name for the success message
        $pemesanan = $this->PemesananModel->find($idPemesanan);
        // Delete the category from the database
        $this->PemesananModel->where('idPemesanan', $idPemesanan)->delete();
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data pemesanan Customer "' . $pemesanan->idCustomer . '" Berhasil di Hapus');
    }
}
