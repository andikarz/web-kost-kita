<?php

namespace App\Controllers;

use App\Models\KostModel; // Mengimpor model Kost untuk digunakan dalam controller

class User extends BaseController
{
    protected $kostModel;

    public function __construct()
    {
        // Inisialisasi model Kost
        $this->kostModel = new KostModel();
    }

    // Fungsi untuk menampilkan halaman utama user (dashboard)
    public function index(): string
    {
        $keyword = $this->request->getVar('keyword');

        if($keyword){
            $kost = $this->kostModel->search($keyword);
        }else{
            $kost = $this->kostModel->findAll();
        }

        // Ambil semua data kost dari database

        // Data yang akan dikirimkan ke view
        $data = [
            'title' => 'Kost Kita', // Judul halaman
            'kost' => $kost // Data kost
        ];

        // Tampilkan halaman dashboard dengan data yang dikirimkan
        return view('user/dashboard', $data);
    }

    // Fungsi untuk menampilkan detail kost berdasarkan slug
    public function detail($slug)
    {
        // Cari kost berdasarkan slug
        $kostList = $this->kostModel->where(['slug' => $slug])->first();

        // Jika kost tidak ditemukan, arahkan kembali dengan pesan error
        if (!$kostList) {
            return redirect()->back()->with('error', 'Kost tidak ditemukan.');
        }

        // Data yang akan dikirimkan ke view
        $data = [
            'title' => $kostList['name'], // Judul halaman diambil dari nama kost
            'kost' => $kostList // Data detail kost
        ];

        // Tampilkan halaman detail dengan data yang dikirimkan
        return view('user/detail', $data);
    }

}

?>