<?php

namespace App\Controllers\Admin;

use \App\Controllers\BaseController;
use App\Models\UserP_M;

class UserP extends BaseController
{

    public function index()
    {

        $pager = \Config\Services::pager();
        $model  = new UserP_M();

        $data = [
            'judul' => 'DATA USER',
            'user' => $model->paginate(3, 'page'),
            'pager' => $model->pager
        ];

        return view("userp/salah", $data);
    }

    public function create()
    {
        return view("userp/insert");
    }

    public function insert()
    {

        if (isset($_POST['password'])) {
            $data = [
                'pelanggan' => $_POST['pelanggan'],
                'alamat' => $_POST['alamat'],
                'telp' => $_POST['telp'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'aktif' => 1
            ];

            $model  = new UserP_M();

            if ($model->insert($data) === false) {
                $error = $model->errors();
                session()->setFlashdata('info', $error);
                return redirect()->to(base_url("/admin/userp/create"));
            } else {
                return redirect()->to(base_url("/loginp"));
            }
        }
    }

    public function delete($id = null)
    {
        echo "proses delete data $id";

        $model = new UserP_M();
        $model->delete($id);
        return redirect()->to(base_url("/admin/user"));
    }

    public function update($id = null, $isi = 1)
    {
        $model  = new UserP_M();

        if ($isi == 0) {
            $isi = 1;
        } else {
            $isi = 0;
        }

        $data = [
            'aktif' => $isi
        ];

        $model->update($id, $data);
        return redirect()->to(base_url("/admin/user"));
    }

    public function find($id = null)
    {
        $model  = new UserP_M();
        $user  = $model->find($id);

        $data = [
            'judul' => 'UPDATE DATA',
            'user' => $user,
            'level' => ['Admin', 'Koki', 'Kasir', 'Warehouse']
        ];

        return view("user/update", $data);
    }

    public function ubah()
    {
        $id = $_POST['iduser'];

        $data = [
            'email' => $_POST['email'],
            'level' => $_POST['level']
        ];

        $model  = new UserP_M();
        $model->update($id, $data);
        return redirect()->to(base_url("/admin/user"));
    }

    //--------------------------------------------------------------------

}
