<?php
use App\pengguna;
use App\dosen;
use App\mahasiswa;
use App\matakuliah;
use App\ruangan;
use App\dosen_matakuliah;
use App\jadwal_matkul;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/public', function () {
    return ('Nama : Aqmarina Nur Alifiani Subingat');
});
Route::get('pengguna','penggunacontroller@awal');
Route::get('/pengguna/tambah','penggunacontroller@tambah');
Route::get('/dosen','dosenc@awal');
Route::get('/dosen/tambah','dosenc@tambah');
Route::get('/mahasiswa','mahasiswac@awal');
Route::get('/mahasiswa/tambah','mahasiswac@tambah');
Route::get('/matakuliah','matakuliahc@awal');
Route::get('/matakuliah/tambah','matakuliahc@tambah');
Route::get('/ruangan','ruanganc@awal');
Route::get('/ruangan/tambah','ruanganc@tambah');
Route::get('/dosmat','dosen_matakuliahc@awal');
Route::get('/dosmat/tambah','dosen_matakuliahc@tambah');
Route::get('/jadwal','jadwal_matkulc@awal');
Route::get('/jadwal/tambah','jadwal_matkulc@tambah');
Route::get('pengguna/{pengguna}', function () {
    return ("Haiiiii Kamu $pengguna");

});

