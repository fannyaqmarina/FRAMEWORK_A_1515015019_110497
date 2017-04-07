<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matkul extends Model
{
   protected $table = 'jadwal_matkul';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id','dosen_id'];

    public function dosen_matakuliah(){
    	return $this->belongsTo(dosen_matakuliah::class,'dosen_matakuliah_id');//per dosen matakuliah memiliki matakuliah yang ada
    }
    public function mahasiswa(){
    	return $this->belongsTo(mahasiswa::class,'mahasiswa_id');//satu mahasiswa memiliki banyak jadwal matkul yang ada
    }
    public function ruangan(){
    	return $this->belongsTo(ruangan::class,'ruangan_id');//banyak jadwal yang ada memiliki masing masing ruangan
    }
}
