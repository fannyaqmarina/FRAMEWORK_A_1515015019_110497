<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
   protected $table = 'matakuliah';
    protected $isi = ['title','Keterangan'];

    public function dosen_matakuliah{
    	return $this->hasMany(dosen_matakuliah::class);//setiap matakuliah yang ada dimilki oleh masing masing dosen_matakuliah
    }
}