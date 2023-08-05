<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function user()
    {
        $data = [
            'title' => 'Daftar User',
            'daftar_user' => $this->UserModel->findAll() // Fixed the typo "findAdll()" to "findAll()"
        ];
        return view('admin/pages/user', $data);
    }
    public function store()
    {
        $data = [
            'namaUser' => $this->request->getPost('namaUser'),
            'posisiUser' => $this->request->getPost('posisiUser'),
            'emailUser' => $this->request->getPost('emailUser'),
            'passwordUser' => $this->request->getPost('passwordUser'),
        ];
        $namaUser = esc($this->request->getPost('namaUser'));

        $this->UserModel->insert($data);

        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data user "' . $namaUser . '" Berhasil di Tambahkan');
    }
    public function update($idUser)
    {
        $data = [
            'namaUser' => $this->request->getPost('namaUser'),
            'posisiUser' => $this->request->getPost('posisiUser'),
            'emailUser' => $this->request->getPost('emailUser'),
            'passwordUser' => $this->request->getPost('passwordUser'),
        ];
        $namaUser = esc($this->request->getPost('namaUser'));
        $user = $this->UserModel->find($idUser);

        $this->UserModel->update($idUser, $data);

        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data User "' . $user->namaUser . '" Berhasil di Ubah');
    }


    public function destroy($idUser)
    {
        // Get the category name for the success message
        $user = $this->UserModel->find($idUser);
        // Delete the category from the database
        $this->UserModel->where('idUser', $idUser)->delete();
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data User "' . $user->namaUser . '" Berhasil di Hapus');
    }
}
