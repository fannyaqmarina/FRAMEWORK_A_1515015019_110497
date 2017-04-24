<?php

namespace App;

use Illuminate\Database\Elequent\Model;
//use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticable;

class pengguna extends Authenticable
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
