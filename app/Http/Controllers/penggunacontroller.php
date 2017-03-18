<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class penggunacontroller extends Controller
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
    	$Pengguna = new pengguna();
    	$Pengguna->username='fannyaqmarina';
    	$Pengguna->password ='aqmarina';
    	$Pengguna->save();
    	return "data dengan username {$Pengguna->username} telah disimpan";

    }
}
