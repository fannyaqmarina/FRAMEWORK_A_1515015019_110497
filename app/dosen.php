<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
   protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];
   public function pengguna(){
   	return $this->belongsTo(pengguna::class,'pengguna_id');//satu pengguna hanya bisa dimiliki satu dosen
   }
   
   public function dosen_matakuliah(){
   	return $this->hasMany(dosen_matakuliah::class,'dosen_id');//kemudian dosen akan menjadi entitas kuat untuk banyak matakuliah
   }

   public function listdosenDanNip(){
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }
   
}
