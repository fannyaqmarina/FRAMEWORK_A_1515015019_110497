<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matkul;

class jadwal_matkulc extends Controller
{
  public function awal()
    {
    	return "Hallo semua";
    }
	 public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jm= new jadwal_matkul;
    	$jm->mahasiswa_id=1;
    	$jm->ruangan_id=1;
    	$jm->dosen_matakuliah_id=1;
    	$jm->save();
    	return "Jadwal Matakuliah telah disimpan terimakasih";
    }
}
