<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KeranjangController extends BaseController
{
    public function index()
    {
        return view('v_keranjang');
    }
}