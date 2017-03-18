<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswac extends Controller
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
   $mhs = new mahasiswa();
    	$mhs->nama='Aqmarina.nas';
    	$mhs->nim='1515015019';
    	$mhs->alamat='SLI H7';
    	$mhs->pengguna_id=2;
    	$mhs->save();
    	return "Data Mahasiswa {$mhs->nama} telah disimpan";
    }
}

