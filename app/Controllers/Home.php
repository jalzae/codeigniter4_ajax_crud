<?php

namespace App\Controllers;

use App\Models\Test;

class Home extends BaseController
{
	public function __construct()
	{
		$this->buku = new Test();
	}
	public function index()
	{
		$data['buku'] = $this->buku->table()->get()->getResult();
		return view('welcome_message', $data);
	}
	public function reload()
	{
		$data['buku'] = $this->buku->table()->get()->getResult();
		return view('table', $data);
	}
	public function formadd()
	{
		return view('formadd');
	}


	public function createbuku()
	{

		$judul = $this->request->getVar("judul");
		$sinopsis = $this->request->getVar("sinopsis");
		$penulis = $this->request->getVar("penulis");

		$data = [
			"judul" => $judul,
			"sinopsis" => $sinopsis,
			"penulis" => $penulis,
		];

		$save = $this->buku->table()->insert($data);
		if ($save) {
			echo "Berhasil Insert";
		} else {
			echo "Gagal Insert";
		}
	}

	public function updatebuku()
	{

		$id = $this->request->getVar("id");
		$judul = $this->request->getVar("judul");
		$sinopsis = $this->request->getVar("sinopsis");
		$penulis = $this->request->getVar("penulis");

		$data = [
			"judul" => $judul,
			"sinopsis" => $sinopsis,
			"penulis" => $penulis,
		];

		$save = $this->buku->table()->update($data, ["id" => $id]);
		if ($save) {
			echo "Berhasil Update";
		} else {
			echo "Gagal Update";
		}
	}
	public function deletebuku()
	{
		$id = $this->request->getVar("id");

		$save = $this->buku->table()->delete(["id" => $id]);
		if ($save) {
			echo "Berhasil Delete";
		} else {
			echo "Gagal Delete";
		}
	}
	public function detailbuku()
	{
		$id = $this->request->getVar("id");

		$data = $this->buku->table()->where(["id" => $id])->get(1)->getRowArray();
		return view("formedit", $data);
	}
}
