<?php

namespace App\Controllers\Admin;

use \App\Controllers\BaseController;
use \App\Models\Menup_M;

class Keranjang extends BaseController
{

    public function index($id = null)
    {
        $model = new Menup_M();
        dd($this->isi($id));

        return view('keranjang/select');
    }

    public function isi($id)
    {
        $db = new Menup_M;


        $menuid = [];
        if (session()->has('_' . $id)) {
            session()->set('_' . $id, session()->get('_' . $id) + 1);
        } else {
            session()->set('_' . $id, 1);
        }
        foreach (session()->get() as $key => $value) {
            if (($key <> 'pelanggan' && $key <> 'idpelanggan' && $key <> 'user' && $key <> 'level' && $key <> 'iduser' && $key <> '__ci_last_regenerate' && $key <> '_ci_previous_url' && $key <> 'email' && $key <> 'loggedIn')) {
                $id2 = substr($key, 1);
                $menuid[$id2] = $value;
            }
        }

        foreach ($menuid as $k => $v) {

            $namamenu = $db->where(['idmenu' => $k])->first();
            $menu[$k] = $namamenu;
            $menu[$k]['jumlah'] = $v;
        }


        $data['menu'] = $menu;

        return view('keranjang/select', $data);
    }

    public function find($id = null)
    {
        $model  = new Menup_M();
        $idmenu  = $model->find($id);

        $data = [
            'idmenu' => $idmenu
        ];

        return view("/keranjang/select", $data);
    }

    //--------------------------------------------------------------------

}
