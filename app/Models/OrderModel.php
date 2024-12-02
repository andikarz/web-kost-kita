<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'kost_orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'id_kost', 'order_date', 'start_date', 'end_date', 'time_period', 'total_price', 'status'];
}

?>