<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PemesananController extends BaseController
{
    public function restaurant()
    {
        $data = [
            'title' => 'Daftar Restaurant'
        ];
        return view('admin/pages/restaurant', $data);
    }
}
