<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganc extends Controller
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
   $ruang = new ruangan();
    	$ruang->title='studio ketcjeh';
    	$ruang->save();
    	return "Ruang {$ruang->title} telah disimpan";
    }

}
