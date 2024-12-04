<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profile extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        // Inisialisasi UserModel
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Mendapatkan ID pengguna yang sedang login
        $id = user()->id;

        // Mendapatkan data user
        $data = [
            'title' => 'Profile',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->where(['id' => $id])->first()  
        ];

        return view('user/profile', $data);
    }

    public function updateUser()
    {
        // Mendapatkan ID pengguna yang sedang login
        $id = user()->id;

        // Ambil data lama
        $userLama = $this->userModel->find($id);

        // Validasi Form Input
        if (!$this->validate([
            'fullname' => 'permit_empty|string|max_length[255]',
            'email' => 'permit_empty|valid_email',
            'phone_number' => 'permit_empty|numeric|max_length[15]',
            'user_image' => 'permit_empty|is_image[user_image]|max_size[user_image,3072]|mime_in[user_image,image/jpg,image/jpeg,image/png]',
            'id_image' => 'permit_empty|is_image[id_image]|max_size[id_image,3072]|mime_in[id_image,image/jpg,image/jpeg,image/png]',
        ])) {
            return redirect()->to('/user/profile')->withInput()->with('validation', $this->validator);
        }

        // Mengelola file gambar user_image
        $userImage = $this->request->getFile('user_image');
        $userImageName = $userLama['user_image']; // Gunakan gambar lama secara default
        if ($userImage && $userImage->isValid()) {
            $userImage->move('img/user');
            $userImageName = $userImage->getName();
        }

        // Mengelola file gambar id_image
        $idImage = $this->request->getFile('id_image');
        $idImageName = $userLama['id_image']; // Gunakan gambar lama secara default
        if ($idImage && $idImage->isValid()) {
            $idImage->move('img/user');
            $idImageName = $idImage->getName();
        }

        // Data yang ingin diupdate
        $data = [
            'fullname'     => $this->request->getVar('fullname') ?: $userLama['fullname'],
            'email'        => $this->request->getVar('email') ?: $userLama['email'],
            'phone_number' => $this->request->getVar('phone_number') ?: $userLama['phone_number'],
            'user_image'   => $userImageName,
            'nik'          => $this->request->getVar('nik') ?: $userLama['nik'],
            'id_image'     => $idImageName,
        ];

        // Update data pengguna
        if ($this->userModel->update($id, $data)) {
            session()->setFlashdata('pesan', 'Data berhasil diperbarui');
        } else {
            session()->setFlashdata('pesan', 'Gagal memperbarui data');
        }

        return redirect()->to('/user/profile');
    }
}
