<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
   protected $table = 'ruangan';
    protected $fillable = ['title'];
    public function jadwal_matkul(){
    	return $this->hasMany(jadwal_matkul::class);
    }//ini function diatas kita bisa lihat bahwa banyak ruangan bisa digunakan oleh masing masing jadwal matakuliah yang ada 
}
