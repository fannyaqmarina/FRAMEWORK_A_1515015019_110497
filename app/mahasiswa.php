<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
   protected $table = 'mahasiswa';
  protected $fillable = ['nama','nim','alamat','pengguna_id'];
    public function pengguna(){
    	return $this->belongsTo(pengguna::class);//mahasiswa memiliki satu id pengguna 
    }
    public function jadwal_matkul(){
    	return $this->hasMany(jadwal_matkul::class,'mahasiswa_id');//dan per mahasiswa dapat mengambil banyak jadwal kuliah 
    }
    public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }
    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }

}
