<?php

namespace App\Controllers;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        // Inisialisasi UserModel
        $this->userModel = new UserModel();
    }

    public function index(): string
    {
        // Mendapatkan ID pengguna yang sedang login
        $id = user()->id;

        // Mendapatkan data user
        $data = [
            'title' => 'Profile',
            'user' => $this->userModel->where(['id' => $id])->first()  
        ];

        return view('admin/profile', $data);
    }

    public function kost()
    {
        // Mendapatkan data user
        $data = [
            'title' => 'Profile',
        ];

        return view('admin/kost', $data);
    }

    public function report()
    {
        // Mendapatkan data user
        $data = [
            'title' => 'Report',
        ];

        return view('admin/report', $data);
    }

}
