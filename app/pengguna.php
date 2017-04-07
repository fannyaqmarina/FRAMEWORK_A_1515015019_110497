<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
     public function mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class);//satu pengguna dimiliki oleh setiap satu mahasiswa
    }
    public function dosen(){
    	return $this->hasOne(dosen::class);//begitu juga dengan dosen satu pengguna juga dimiliki oleh satu dosen
    }
    public function peran(){
    	return $this->belongsToMany(Peran::class);//dan setiap pengguna memiliki banyak peran hihi 
    }
}
