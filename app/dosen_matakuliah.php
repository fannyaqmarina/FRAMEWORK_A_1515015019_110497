<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
   	protected $table = 'dosen_matakuliah';
    protected $isi = ['dosen_id','matakuliah_id'];
    public function dosen(){
    	return $this->belongsTo(dosen::class);}//satu dosen dapat mengajar banyak matakuliah yang ada 
    public function matakuliah(){
    	return $this->belongsTo(matakuliah::class);}//matakuliah yang ada dapat diajar banyak dosen
    public function jadwal_matkul(){
    	return $this->hasMany(jadwal_matkul::class);//dan dosen matakuliah ini nantinya akan menjadi kunci yang kuat untuk jadwal matakuliah
    }
}

