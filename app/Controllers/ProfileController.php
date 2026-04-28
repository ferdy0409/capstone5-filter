<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProfileController extends BaseController
{
    public function profile()
    {
        $data = [
            'username' => session()->get('username'),
            'role' => session()->get('role'),
            'email' => session()->get('email'),
            'login_time' => session()->get('login_time'),
            'login_status' => 'Sudah Login'
        ];

        return view('v_profile.php', $data);
    }
}
