<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\KostModel;

class Order extends BaseController
{
    // Properti untuk model Kost dan Order
    protected $kostModel;
    protected $orderModel;

    public function __construct()
    {
        // Inisialisasi model Kost dan Order
        $this->kostModel = new KostModel();
        $this->orderModel = new OrderModel();
    }

    // Fungsi untuk menampilkan halaman order berdasarkan slug
    public function index($slug)
    {
        // Ambil data kost berdasarkan slug dan kirimkan ke view
        $data = [
            'title' => 'Order',
            'kost' => $this->kostModel->where(['slug' => $slug])->first() // Ambil data kost dengan slug tertentu
        ];

        return view('/user/order', $data); // Tampilkan halaman order
    }

    // Fungsi untuk menyimpan data pemesanan
    public function saveOrder()
    {
        // Ambil data dari form input
        $id_kost = $this->request->getPost('id_kost');
        $start_date = $this->request->getPost('start_date');
        $time_period = $this->request->getPost('time_period');
        $id_user = user()->id; // Ambil ID pengguna yang sedang login
    
        // Cek apakah data kost tersedia
        $kost = $this->kostModel->find($id_kost);
        if (!$kost) { // Jika kost tidak ditemukan, kembalikan ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Kost tidak ditemukan.');
        }
    
        // Hitung tanggal selesai berdasarkan periode waktu
        $end_date = date('Y-m-d', strtotime("+$time_period months", strtotime($start_date)));
    
        // Hitung total harga berdasarkan harga kost dan periode waktu
        $total_price = $kost['price'] * $time_period;
    
        // Simpan data pemesanan ke dalam database
        $this->orderModel->insert([
            'id_user' => $id_user, // ID pengguna
            'id_kost' => $id_kost, // ID kost
            'order_date' => date('Y-m-d H:i:s'), // Tanggal pesanan dibuat
            'start_date' => $start_date, // Tanggal mulai sewa
            'end_date' => $end_date, // Tanggal selesai sewa
            'time_period' => $time_period, // Lama sewa dalam bulan
            'total_price' => $total_price, // Total harga
            'status' => 'PENDING', // Status awal pesanan
        ]);
    
        // Ambil ID order yang baru saja disimpan
        $order_id = $this->orderModel->insertID();
    
        // Redirect ke halaman pembayaran dengan membawa ID order
        return redirect()->to('/user/order/payment/' . $order_id)->with('success', 'Pesanan berhasil dibuat.');
    }

}


?>