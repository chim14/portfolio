<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public function customer()
    {
        $data = [
            'title' => 'Daftar Customer',
            'daftar_customer' => $this->CustomerModel->findAll() // Fixed the typo "findAdll()" to "findAll()"
        ];
        return view('admin/pages/customer', $data);
    }
    // public function create()
    // {
    //     $data = [
    //         'title' => 'Tambah Customer',
    //     ];
    //     return view('admin/pages/createcustomer', $data);
    // }
    public function store()
    {
        $data = [
            'namaCustomer' => $this->request->getPost('namaCustomer'),
            'noCustomer' => $this->request->getPost('noCustomer'),
            'emailCustomer' => $this->request->getPost('emailCustomer'),
            'alamatCustomer' => $this->request->getPost('alamatCustomer'),
        ];
        $namaCustomer = esc($this->request->getPost('namaCustomer'));

        $this->CustomerModel->insert($data);

        // Redirect the user back to the previous page with a success flash message
        return redirect()->to('list-customer')->with('success', 'Data Customer "' . $namaCustomer . '" Berhasil di Tambahkan');
    }
    public function update($idCustomer)
    {
        $data = [
            'namaCustomer' => $this->request->getPost('namaCustomer'),
            'noCustomer' => $this->request->getPost('noCustomer'),
            'emailCustomer' => $this->request->getPost('emailCustomer'),
            'alamatCustomer' => $this->request->getPost('alamatCustomer'),
        ];
        $namaCustomer = esc($this->request->getPost('namaCustomer'));
        $customer = $this->CustomerModel->find($idCustomer);

        $this->CustomerModel->update($idCustomer, $data);

        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Produk "' . $customer->namaCustomer . '" Berhasil di Ubah');
    }


    public function destroy($idCustomer)
    {
        // Get the category name for the success message
        $customer = $this->CustomerModel->find($idCustomer);
        // Delete the category from the database
        $this->CustomerModel->where('idCustomer', $idCustomer)->delete();
        // Redirect the user back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Data Produk "' . $customer->namaCustomer . '" Berhasil di Hapus');
    }
}
