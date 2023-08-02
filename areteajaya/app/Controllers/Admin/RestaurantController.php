<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class RestaurantController extends BaseController
{
    public function restaurant()
    {
        $data = [
            'title' => 'Daftar Restaurant'
        ];
        return view('admin/pages/restaurant', $data);
    }
}
