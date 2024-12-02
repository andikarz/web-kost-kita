<?php

namespace App\Controllers;

use App\Models\KostModel;

class Home extends BaseController
{
    public function index(): string
    {
        $kostModel = new KostModel();
        $kost = $kostModel->findAll();

        $data = [
            'kost' => $kost
        ];

        return view('user/dashboard', $data);
    }

    public function register()
    {
        return view('auth/register');
    }

    public function forget()
    {
        return view('auth/forget');
    }
}
