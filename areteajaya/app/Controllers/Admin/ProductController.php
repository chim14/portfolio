<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function product()
    {
        $data = [
            'title' => 'Daftar Produk',
            'daftar_produk' => $this->ProdukModel->findAll()
        ];
        return view('admin/pages/product', $data);
    }
}
