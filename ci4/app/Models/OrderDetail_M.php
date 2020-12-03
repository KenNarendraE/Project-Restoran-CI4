<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderDetail_M extends Model
{
    protected $table = 'vorderdetail';
    protected $primaryKey = 'idorderdetail';
    protected $allowedFields = ['idorderdetail', 'idorder', 'idmenu', 'jumlah', 'hargajual'];
}
