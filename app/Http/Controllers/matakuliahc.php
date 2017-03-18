<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahc extends Controller
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
   $matkul = new matakuliah();
    	$matkul->title='Dance';
    	$matkul->Keterangan='dance asyique';
    	$matkul->save();
    	return "Matakuliah {$matkul->title} telah disimpan";
    }

}
