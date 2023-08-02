<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public function customer()
    {
        $data = [
            'title' => 'Daftar Customer'
        ];
        return view('admin/pages/customer', $data);
    }
}
