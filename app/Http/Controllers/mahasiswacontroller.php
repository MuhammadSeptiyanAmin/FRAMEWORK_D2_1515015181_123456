<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    return "Hello dari MahasiswaController";
	}

public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$mahasiswa = new mahsiswa;
	$mahsiswa->id = '1';
	$mahasiswa->save();
	return "data dengan id {$mahsiswa->id} telah sisimpan";
}
}
