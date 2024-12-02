<?php

namespace App\Controllers;

use App\Models\KostModel;

class User extends BaseController
{
    protected $kostModel;

    public function __construct()
    {
        $this->kostModel = new KostModel();
    }

    public function index(): string
    {
        $kost = $this->kostModel->findAll();

        $data = [
            'kost' => $kost
        ];

        return view('user/dashboard', $data);
    }

    public function detail($slug)
    {
        $data = [
            'kost' => $this->kostModel->where(['slug' => $slug])->first()
        ];

        return view('user/detail', $data);
    }

}
