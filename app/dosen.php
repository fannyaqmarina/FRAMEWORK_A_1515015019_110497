<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
   protected $table = 'dosen';
    protected $isi = ['nama','nip','alamat','pengguna_id'];
   public function pengguna(){
   	return $this->belongsTo(pengguna::class);//satu pengguna hanya bisa dimiliki satu dosen
   }
   public function dosen_matakuliah(){
   	return $this->hasMany(dosen_matakuliah::class);//kemudian dosen akan menjadi entitas kuat untuk banyak matakuliah
   }
   
}
