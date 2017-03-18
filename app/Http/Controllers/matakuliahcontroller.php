<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class matakuliahcontroller extends Controller
{
    return "Hello dari matkuliahController";
	}

public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$matakuliah = new matakuliah;
	$matakuliah->id = '1';
	$matakuliah->save();
	return "data dengan id {$matakuliah->id} telah sisimpan";
}
}