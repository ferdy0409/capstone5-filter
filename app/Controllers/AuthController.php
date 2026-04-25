<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function login()
    {
        // 1. Cek jika ada request POST (saat tombol Login diklik)
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            // 2. Data user (Sesuai dengan username 'april' dan password '123')
            $dataUser = [
                'username' => 'april', 
                'password' => '202cb962ac59075b964b07152d234b70', // md5 dari '123'
                'role'     => 'admin'
            ];

            // 3. Validasi Username
            if ($username == $dataUser['username']) {
                
                // 4. Cek password dengan enkripsi md5
                if (md5($password) == $dataUser['password']) {
                    session()->set([
                        'username'   => $dataUser['username'],
                        'role'       => $dataUser['role'],
                        'isLoggedIn' => true
                    ]);

                    // Login berhasil, arahkan ke halaman utama atau produk
                    return redirect()->to(base_url('/'));
                } else {
                    // Password salah
                    session()->setFlashdata('failed', 'Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                // Username tidak ketemu
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        }

        // 5. Tampilkan halaman login jika akses biasa (GET)
        return view('v_login');
    }

    public function logout()
    {
        // Menghapus semua session saat logout
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}