<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\OrderModel;
use App\Models\ReportModel;

class Profile extends BaseController
{
    protected $userModel;
    protected $orderModel;
    protected $reportModel;

    public function __construct()
    {
        // Inisialisasi UserModel
        $this->userModel = new UserModel();
        $this->orderModel = new OrderModel();
        $this->reportModel = new ReportModel();
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

    public function history()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = user()->id;

        // Ambil data order beserta relasi ke tabel users, kost_list, dan kost_owners
        $orders = $this->orderModel
            ->select('
                kost_orders.*, 
                kost_list.name as kost_name
            ')
            ->join('kost_list', 'kost_list.id = kost_orders.id_kost') // Relasi ke tabel kost_list
            ->where('kost_orders.id_user', $userId) // Filter berdasarkan ID order
            ->findAll(); // Ambil satu data

        // Data yang akan dikirim ke view
        $data = [
            'title' => 'Riwayat Pemesanan',
            'orders' => $orders,
        ];

        return view('user/history', $data);
    }

    public function terms()
    {
        $data = [
            'title' => 'Syarat dan Ketentuan',  
        ];

        return view('user/terms', $data);
    }

    public function report()
    {
        $data = [
            'title' => 'Bantuan',  
        ];

        return view('user/report', $data);
    }

    public function createReport()
    {
        // Validasi input
        if (!$this->validate([
            'description' => 'required|string',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Simpan laporan ke database
        $this->reportModel->save([
            'id_user' => user()->id,
            'description' => $this->request->getVar('description'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        // Set flashdata untuk notifikasi
        session()->setFlashdata('success', 'Laporan berhasil dikirim.');
        return redirect()->to('/user/report');
    }

}
