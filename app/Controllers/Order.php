<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\KostModel;

class Order extends BaseController
{
    protected $kostModel;
    protected $orderModel;

    public function __construct()
    {
        $this->kostModel = new KostModel();
        $this->orderModel = new OrderModel();
    }

    public function index($slug)
    {
        $data = [
            'kost' => $this->kostModel->where(['slug' => $slug])->first()
        ];

        return view('/user/order', $data);
    }

    public function saveOrder()
    {
        $id_kost = $this->request->getPost('id_kost');
        $start_date = $this->request->getPost('start_date');
        $time_period = $this->request->getPost('time_period');
        $id_user = user()->id;
    
        $kost = $this->kostModel->find($id_kost);
        if (!$kost) {
            return redirect()->back()->with('error', 'Kost tidak ditemukan.');
        }
    
        // Hitung tanggal selesai
        $end_date = date('Y-m-d', strtotime("+$time_period months", strtotime($start_date)));
    
        // Hitung total harga
        $total_price = $kost['price'] * $time_period;
    
        // Simpan data pemesanan
        $this->orderModel->insert([
            'id_user' => $id_user,
            'id_kost' => $id_kost,
            'order_date' => date('Y-m-d H:i:s'),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'time_period' => $time_period,
            'total_price' => $total_price,
            'status' => 'PENDING',
        ]);
    
        // Ambil ID order yang baru saja disimpan
        $order_id = $this->orderModel->insertID();
    
        // Redirect ke halaman pembayaran dengan membawa ID order
        return redirect()->to('/user/order/payment/' . $order_id)->with('success', 'Pesanan berhasil dibuat.');
    }
    
}


?>