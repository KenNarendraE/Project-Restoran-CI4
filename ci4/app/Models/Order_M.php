<?php

namespace App\Models;

use CodeIgniter\Model;

class Order_M extends Model
{
    protected $table = 'vorder';
    protected $primaryKey = 'idorder';
    protected $allowedFields = ['idorder', 'idpelanggan', 'tglorder', 'total', 'bayar', 'kembali', 'status'];
}
