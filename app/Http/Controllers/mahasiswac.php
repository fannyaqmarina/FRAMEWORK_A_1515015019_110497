<?php

namespace App\Http\Controllers;
// namespace App\Http\Requests;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\mahasiswa;
use App\pengguna;
use App\Http\Requests\mahasiswarequest;

class mahasiswac extends Controller{
protected $informasi = 'Gagal melakukan aksi';
public function awal(){
	$semuaMahasiswa = Mahasiswa::all();
	return view('mahasiswa.awal',compact('semuaMahasiswa'));
}
public function tambah(){
	return view('mahasiswa.tambah');
}
public function simpan(mahasiswarequest $input){
	$pengguna = new pengguna($input->only('username','password'));
	if ($pengguna->save()) {
		$mahasiswa = new mahasiswa();
		$mahasiswa->nama = $input->nama;
		$mahasiswa->nim = $input->nim;
		$mahasiswa->alamat = $input->alamat;
		if ($pengguna->mahasiswa()->save($mahasiswa)) $this->informasi = 'Berhasil Simpan data';
	}
	return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
	$mahasiswa = mahasiswa::find($id);
	return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
}
public function lihat($id){
	$mahasiswa = mahasiswa::find($id);
	return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
}
public function update($id, mahasiswarequest $input){
	$mahasiswa = mahasiswa::find($id);
	$pengguna = $mahasiswa->pengguna;
	$mahasiswa->nama = $input->nama;
	$mahasiswa->nim = $input->nim;
	$mahasiswa->alamat = $input->alamat;
	$mahasiswa->save();
	if(!is_null($input->username)){
		$pengguna->fill($input->only('username'));
		if (!empty($input->password)){
			$pengguna->password = $input->password;
		}
		if($pengguna->save()){
			$this->informasi = 'Berhasil update data';
		}
		else{
			$this->informasi= 'Gagal update Data';
		}
	}
return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
	$mahasiswa = mahasiswa::find($id);
	if ($mahasiswa->pengguna()->delete()){
		if($mahasiswa->delete()){
			$this->informasi = 'Berhasil Hapus Data';
		}
	}
	return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
}

}