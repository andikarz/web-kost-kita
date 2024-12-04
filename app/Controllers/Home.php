<?php

namespace App\Controllers;

use App\Models\KostModel;

class Home extends BaseController
{
    // Halaman Utama Kost Kita
    public function index(): string
    {
        // Mengambil Data Kost dari Database
        $kostModel = new KostModel();
        $kost = $kostModel->findAll();

        // Menyimpan Data Kost ke Variabel $data
        $data = [
            'title' => 'Kost Kita',
            'kost' => $kost
        ];

        return view('user/dashboard', $data);
    }

    // Menampilkan Halaman Register
    public function register()
    {
        return view('auth/register');
    }

    // Menampilkan Halaman Lupa Sandi
    public function forget()
    {
        return view('auth/forget');
    }
}
