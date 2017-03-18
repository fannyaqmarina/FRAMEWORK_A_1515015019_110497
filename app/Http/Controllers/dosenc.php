<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenc extends Controller
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
   $Dosen = new dosen();
    	$Dosen->nama='Aqmarina,MT';
    	$Dosen->nip='111090910';
    	$Dosen->alamat='SLI H7';
    	$Dosen->pengguna_id=2;
    	$Dosen->save();
    	return "data dosen {$Dosen->nama} telah disimpan";
    }

}
