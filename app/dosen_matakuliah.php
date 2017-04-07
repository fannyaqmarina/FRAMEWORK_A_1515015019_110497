<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
   	protected $table = 'dosen_matakuliah';
    protected $guarded =['id'];
    public function dosen(){
    	return $this->belongsTo(dosen::class,'dosen_id');}//satu dosen dapat mengajar banyak matakuliah yang ada 

    public function matakuliah(){
    	return $this->belongsTo(matakuliah::class,'matakuliah_id');}//matakuliah yang ada dapat diajar banyak dosen

    public function jadwal_matkul(){
    	return $this->hasMany(jadwal_matkul::class,'dosen_matakuliah_id');//dan dosen matakuliah ini nantinya akan menjadi kunci yang kuat untuk jadwal matakuliah
    }
    public function listDosenDanMatakuliah(){
    	$out = [];
    	foreach ($this->all() as $dsnmtk) {
    		$out[$dsnmtk->id] = "{$dsnmtk->dosen->nama} (matakuliah {$dsnmtk->matakuliah->title})";
    	}
    	return $out;
    }
}

