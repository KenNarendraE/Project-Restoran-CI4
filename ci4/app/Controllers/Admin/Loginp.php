<?php

namespace App\Controllers\Admin;

use \App\Models\Pelanggan_M;
use \App\Controllers\BaseController;


class Loginp extends BaseController
{
    public function index()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $model = new Pelanggan_M();
            $pelanggan = $model->where(['email' => $email,  'aktif' => 1])->first();

            if (empty($pelanggan)) {
                $data['info'] = "Email salah !!";
            } else {

                if ($password == $pelanggan['password']) {
                    $this->setSession($pelanggan);
                    return redirect()->to(base_url('/plg'));
                } else {
                    $data['info'] = "Password salah !!";
                }
                // if (password_verify($password, $pelanggan['password'])) {
                //     $this->setSession($pelanggan);
                //     return redirect()->to(base_url('/pelangganp/select'));
                // } else {
                //     $data['info'] = "Password salah !!";
                // }
            }
        } else {
            # code...
        }
        return view('template/loginp', $data);
    }

    public function setSession($pelanggan)
    {
        $data = [
            'pelanggan' => $pelanggan['pelanggan'],
            'email' => $pelanggan['email'],
            'loggedIn' => true
        ];

        session()->set($data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/loginp'));
    }

    //--------------------------------------------------------------------

}
