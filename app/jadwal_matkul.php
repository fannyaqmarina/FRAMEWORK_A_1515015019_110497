<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matkul extends Model
{
   protected $table = 'jadwal_matkul';
    protected $isi = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
    public function dosen_matakuliah(){
    	return $this->belongsTo(dosen_matakuliah::class);//per dosen matakuliah memiliki matakuliah yang ada
    }
    public function mahasiswa(){
    	return $this->belongsTo(mahasiswa::class);//satu mahasiswa memiliki banyak jadwal matkul yang ada
    }
    public function ruangan(){
    	return $this->belongsTo(ruangan::class);//banyak jadwal yang ada memiliki masing masing ruangan
    }
}
