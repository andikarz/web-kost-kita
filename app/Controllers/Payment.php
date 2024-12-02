<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\KostModel;
use App\Models\PaymentModel;

class Payment extends BaseController
{
    protected $kostModel;
    protected $orderModel;
    protected $paymentModel;

    public function __construct()
    {
        $this->kostModel = new KostModel();
        $this->orderModel = new OrderModel();
        $this->paymentModel = new PaymentModel();
    }

    public function index($id_order)
    {
        // Ambil data order beserta relasi ke users, kost_list, dan kost_owners
        $order = $this->orderModel
            ->select('
                kost_orders.*, 
                users.fullname, users.email, users.phone_number as user_phone, 
                kost_list.name as kost_name, kost_list.type, kost_list.image, kost_list.address, kost_list.price,
                kost_owners.name as owner_name, kost_owners.phone_number as owner_phone, kost_owners.no_rek
            ')
            ->join('users', 'users.id = kost_orders.id_user')
            ->join('kost_list', 'kost_list.id = kost_orders.id_kost')
            ->join('kost_owners', 'kost_owners.id = kost_list.id_owners')
            ->where('kost_orders.id', $id_order)
            ->first();
    
        // Jika order tidak ditemukan
        if (!$order) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
        }
    
        // Kirim data ke view
        return view('/user/payment', [
            'id' => $id_order,
            'order' => $order,
        ]);
    }
    
    public function processPayment()
    {
        $data = [
            'id_order' => $this->request->getPost('id_order'),
            'method' => $this->request->getPost('method'),
            'amount' => $this->request->getPost('amount'),
            'payment_date' => date('Y-m-d'),
        ];

        // Simpan ke database
        $this->paymentModel->insert($data);

        // Arahkan ke halaman sukses
        return redirect()->to('/user/order/payments/success/' . $data['id_order']);
    }

    public function success($id_order)
    {
        $payment = $this->paymentModel->where('id_order', $id_order)->first();
        $order = $this->orderModel->find($id_order);
        $kost = $this->kostModel->find($order['id_kost']);

        $data = [
            'status' => 'SUCCESS'
        ];

        $this->orderModel->update($id_order, $data);

        return view('user/payment_success');
    }
    
}


?>