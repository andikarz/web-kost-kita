<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\KostModel;
use App\Models\PaymentModel;

class Payment extends BaseController
{
    // Properti untuk model Kost, Order, dan Payment
    protected $kostModel;
    protected $orderModel;
    protected $paymentModel;

    public function __construct()
    {
        // Inisialisasi model Kost, Order, dan Payment
        $this->kostModel = new KostModel();
        $this->orderModel = new OrderModel();
        $this->paymentModel = new PaymentModel();
    }

    // Fungsi untuk menampilkan halaman pembayaran
    public function index($id_order)
    {
        // Ambil data order beserta relasi ke tabel users, kost_list, dan kost_owners
        $order = $this->orderModel
            ->select('
                kost_orders.*, 
                users.fullname, users.email, users.phone_number as user_phone, 
                kost_list.name as kost_name, kost_list.type, kost_list.image, kost_list.address, kost_list.price,
                kost_owners.name as owner_name, kost_owners.phone_number as owner_phone, kost_owners.no_rek
            ')
            ->join('users', 'users.id = kost_orders.id_user') // Relasi ke tabel users
            ->join('kost_list', 'kost_list.id = kost_orders.id_kost') // Relasi ke tabel kost_list
            ->join('kost_owners', 'kost_owners.id = kost_list.id_owners') // Relasi ke tabel kost_owners
            ->where('kost_orders.id', $id_order) // Filter berdasarkan ID order
            ->first(); // Ambil satu data

        // Jika order tidak ditemukan, kembalikan ke halaman sebelumnya dengan pesan error
        if (!$order) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
        }

        // Data yang akan dikirim ke view
        $data = [
            'title' => 'Payment',
            'id' => $id_order,
            'order' => $order,
        ];
    
        // Tampilkan halaman pembayaran
        return view('/user/payment', $data);
    }
    
    // Fungsi untuk memproses pembayaran
    public function processPayment()
    {
        // Ambil data pembayaran dari form
        $data = [
            'id_order' => $this->request->getPost('id_order'), // ID pesanan
            'method' => $this->request->getPost('method'), // Metode pembayaran
            'amount' => $this->request->getPost('amount'), // Jumlah pembayaran
            'payment_date' => date('Y-m-d'), // Tanggal pembayaran
        ];

        // Simpan data pembayaran ke database
        $this->paymentModel->insert($data);

        // Redirect ke halaman sukses dengan ID pesanan
        return redirect()->to('/user/order/payments/success/' . $data['id_order']);
    }

    // Fungsi untuk menangani halaman sukses setelah pembayaran
    public function success($id_order)
    {
        // Ambil data pembayaran berdasarkan ID pesanan
        $payment = $this->paymentModel->where('id_order', $id_order)->first();

        // Ambil data order berdasarkan ID pesanan
        $order = $this->orderModel->find($id_order);

        // Ambil data kost berdasarkan ID kost
        $kost = $this->kostModel->find($order['id_kost']);

        // Perbarui status order menjadi 'SUCCESS'
        $data = [
            'status' => 'SUCCESS'
        ];

        $this->orderModel->update($id_order, $data);

        // Tampilkan halaman sukses pembayaran
        return view('user/payment_success');
    }
    
}


?>