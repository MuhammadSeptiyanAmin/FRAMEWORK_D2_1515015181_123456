<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangan;

class ruangancontroller extends Controller
{
	public function awal()
	{
    return "Hello dari ruangancontroller";
	}

public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$ruangan = new ruangan;
	$ruangan->id = '1';
	$ruangan->save();
	return "data dengan id {$ruangan->id} telah sisimpan";
}
}