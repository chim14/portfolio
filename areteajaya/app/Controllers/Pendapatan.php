<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pendapatan extends BaseController
{
    public function pendapatan()
    {
        $data = [
            'title' => 'Daftar Pendapatan',
            'daftar_pendapatan' => $this->PendapatanModel->findAll() // Fixed the typo "findAdll()" to "findAll()"
        ];
        return view('admin/pages/pendapatan', $data);
    }
}
