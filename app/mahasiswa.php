<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
   protected $table = 'mahasiswa';
  protected $isi = ['nama','nim','alamat','pengguna_id'];
    public function pengguna(){
    	return $this->belongsTo(pengguna::class);//mahasiswa memiliki satu id pengguna 
    }
    public function jadwal_matkul(){
    	return $this->hasMany(jadwal_matkul::class);//dan per mahasiswa dapat mengambil banyak jadwal kuliah 
    }

}
