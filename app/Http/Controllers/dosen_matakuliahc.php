<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliahc extends Controller
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
    	$dosmat= new dosen_matakuliah;
    	$dosmat->dosen_id=1;
    	$dosmat->matakuliah_id=1;
    	$dosmat->save();
    	return "dosen dengan id ke {$dosmat->dosen_id} mengajar matakuliah dengan id {$dosmat->matakuliah_id} telah disimpan";
    }

}
