<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu_M extends Model
{
    protected $table = 'tblmenu';
    protected $primaryKey = 'idmenu';
    protected $allowedFields = ['idkategori', 'menu', 'gambar', 'harga'];
    protected $validationRules = [
        'menu' => 'alpha_numeric_space|min_length[3]|is_unique[tblmenu.menu]',
        'harga' => 'numeric'
    ];

    protected $validationMessages = [
        'menu' => [
            'alpha_numeric_space' => 'Nama tidak bisa menggunakan simbol',
            'min_length' => 'Nama terlalu pendek',
            'is_unique' => 'Nama sudah dipakai'
        ],

        'harga' => [
            'numeric' => 'Harga tidak bisa menggunakan simbol'
        ],
    ];
}
