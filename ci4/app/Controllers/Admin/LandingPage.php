<?php

namespace App\Controllers\Admin;

use \App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Models\Menup_M;

class LandingPage extends BaseController
{
	public function index()
	{
		$pager = \Config\Services::pager();
		$model  = new Menup_M();

		$data = [
			'judul' => 'DAFTAR MENU',
			'menu' => $model->paginate(4, 'page'),
			'pager' => $model->pager
		];

		return view("menup/select", $data);
	}

	public function option()
	{
		$model = new Kategori_M();
		$kategori  = $model->findAll();
		$data = [
			'kategori' => $kategori
		];
		return view('template/option', $data);
	}

	public function read()
	{
		$pager = \Config\Services::pager();
		if (isset($_GET['idkategori'])) {
			$id = $_GET['idkategori'];

			$model = new Menup_M();
			$jumlah = $model->where('idkategori', $id)->findAll();
			$count = count($jumlah);

			$tampil = 4;
			$mulai = 0;

			if (isset($_GET['page'])) {
				$page = $_GET['page'];
				$mulai = ($tampil * $page) - $tampil;
			}

			$menu = $model->where('idkategori', $id)->findAll($tampil, $mulai);

			$data = [
				'judul' => 'DATA PENCARIAN MENU',
				'menu' => $menu,
				'pager' => $pager,
				'tampil' => $tampil,
				'total' => $count
			];

			return view("menup/cari", $data);
		}
	}

	//--------------------------------------------------------------------

}
