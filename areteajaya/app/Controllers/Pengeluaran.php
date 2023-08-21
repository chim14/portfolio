<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pengeluaran extends BaseController
{
    public function pengeluaran()
    {
        $data = [
            'title' => 'Daftar pengeluaran',
            'daftar_pengeluaran' => $this->PengeluaranModel->findAll() // Fixed the typo "findAdll()" to "findAll()"
        ];
        return view('admin/pages/pengeluaran', $data);
    }
    public function store()
    {
        $data = [
            'namaPengeluaran' => $this->request->getPost('namaPengeluaran'),
            'typePengeluaran' => $this->request->getPost('typePengeluaran'),
            'jumlahPengeluaran' => $this->request->getPost('jumlahPengeluaran'),
            'tanggalPengeluaran' => $this->request->getPost('tanggalPengeluaran'),
            'notePengeluaran' => $this->request->getPost('notePengeluaran'),
        ];
        $namaPengeluaran = esc($this->request->getPost('namaPengeluaran'));

        $this->PengeluaranModel->insert($data);

        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Pengeluaran "' . $namaPengeluaran . '" Berhasil di Tambahkan');
    }
    public function update($idPengeluaran)
    {
        $data = [
            'namaPengeluaran' => $this->request->getPost('namaPengeluaran'),
            'typePengeluaran' => $this->request->getPost('typePengeluaran'),
            'jumlahPengeluaran' => $this->request->getPost('jumlahPengeluaran'),
            'tanggalPengeluaran' => $this->request->getPost('tanggalPengeluaran'),
            'notePengeluaran' => $this->request->getPost('notePengeluaran'),
        ];
        $namaPengeluaran = esc($this->request->getPost('namaPengeluaran'));
        $pengeluaran = $this->PengeluaranModel->find($idPengeluaran);

        $this->PengeluaranModel->update($idPengeluaran, $data);

        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Pengeluaran "' . $pengeluaran->namaPengeluaran . '" Berhasil di Ubah');
    }


    public function destroy($idPengeluaran)
    {
        // Get the category name for the success message
        $pengeluaran = $this->PengeluaranModel->find($idPengeluaran);
        // Delete the category from the database
        $this->PengeluaranModel->where('idPengeluaran', $idPengeluaran)->delete();
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Pengeluaran "' . $pengeluaran->namaPengeluaran . '" Berhasil di Hapus');
    }
}
