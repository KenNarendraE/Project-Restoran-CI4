<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelanggan_M extends Model
{
    protected $table = 'tblpelanggan';

    protected $primaryKey = 'idpelanggan';

    protected $allowedFields = ['pelanggan', 'email', 'password', 'aktif'];

    protected $validationRules = [
        'pelanggan' => 'alpha_numeric_space|min_length[3]|is_unique[tblpelanggan.pelanggan]',
        'email' => 'valid_email'
    ];

    protected $validationMessages = [
        'pelanggan' => [
            'alpha_numeric_space' => 'Nama tidak bisa menggunakan simbol',
            'min_length' => 'Nama User terlalu pendek',
            'is_unique' => 'User sudah dipakai'
        ],

        'email' => [
            'valid_email' => 'Email Salah !'

        ],
    ];
}
