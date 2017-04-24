<?php
use App\pengguna;
use App\dosen;
use App\mahasiswa;
use App\matakuliah;
use App\ruangan;
use App\dosen_matakuliah;
use App\jadwal_matkul;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/public', function () {
    return ('Nama : Aqmarina Nur Alifiani Subingat');
});
Route::get('/login','sesicontroller@form');
Route::post('/login','sesicontroller@validasi');
Route::get('/logout','sesicontroller@logout');
Route::get('/','sesicontroller@index');

Route::group(['midleware'=>'AutentifikasiUser'],function(){
Route::get('pengguna','penggunacontroller@awal');
Route::get('/pengguna/tambah','penggunacontroller@tambah');
Route::get('pengguna/lihat/{pengguna}','penggunacontroller@lihat');
Route::post('/pengguna/simpan','penggunacontroller@simpan');
Route::get('/pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('/pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('/pengguna/hapus/{pengguna}','penggunacontroller@hapus');

Route::get('matakuliah','matakuliahc@awal');
Route::get('/matakuliah/tambah','matakuliahc@tambah');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahc@lihat');
Route::post('/matakuliah/simpan','matakuliahc@simpan');
Route::get('/matakuliah/edit/{matakuliah}','matakuliahc@edit');
Route::post('/matakuliah/edit/{matakuliah}','matakuliahc@update');
Route::get('/matakuliah/hapus/{matakuliah}','matakuliahc@hapus');

Route::get('ruangan','ruanganc@awal');
Route::get('/ruangan/tambah','ruanganc@tambah');
Route::get('ruangan/lihat/{ruangan}','ruanganc@lihat');
Route::post('/ruangan/simpan','ruanganc@simpan');
Route::get('/ruangan/edit/{ruangan}','ruanganc@edit');
Route::post('/ruangan/edit/{ruangan}','ruanganc@update');
Route::get('/ruangan/hapus/{ruangan}','ruanganc@hapus');

Route::get('mahasiswa','mahasiswac@awal');
Route::get('/mahasiswa/tambah','mahasiswac@tambah');
Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswac@lihat');
Route::post('/mahasiswa/simpan','mahasiswac@simpan');
Route::get('/mahasiswa/edit/{mahasiswa}','mahasiswac@edit');
Route::post('/mahasiswa/edit/{mahasiswa}','mahasiswac@update');
Route::get('/mahasiswa/hapus/{mahasiswa}','mahasiswac@hapus');

Route::get('jadwal_matkul','jadwal_matkulc@awal');
Route::get('/jadwal_matkul/tambah','jadwal_matkulc@tambah');
Route::get('jadwal_matkul/lihat/{jadwal_matkul}','jadwal_matkulc@lihat');
Route::post('/jadwal_matkul/simpan','jadwal_matkulc@simpan');
Route::get('/jadwal_matkul/edit/{jadwal_matkul}','jadwal_matkulc@edit');
Route::post('/jadwal_matkul/edit/{jadwal_matkul}','jadwal_matkulc@update');
Route::get('/jadwal_matkul/hapus/{jadwal_matkul}','jadwal_matkulc@hapus');

Route::get('dosen','dosenc@awal');
Route::get('/dosen/tambah','dosenc@tambah');
Route::get('dosen/lihat/{dosen}','dosenc@lihat');
Route::post('/dosen/simpan','dosenc@simpan');
Route::get('/dosen/edit/{dosen}','dosenc@edit');
Route::post('/dosen/edit/{dosen}','dosenc@update');
Route::get('/dosen/hapus/{dosen}','dosenc@hapus');

Route::get('dosen_matakuliah','dosen_matakuliahc@awal');
Route::get('/dosen_matakuliah/tambah','dosen_matakuliahc@tambah');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','dosen_matakuliahc@lihat');
Route::post('/dosen_matakuliah/simpan','dosen_matakuliahc@simpan');
Route::get('/dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahc@edit');
Route::post('/dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahc@update');
Route::get('/dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahc@hapus');
});


Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujigakpunya','RelationshipRebornController@ujigakpunya');
// Route::get('/',function()
// {
// 	return \App\dosen_matakuliah::whereHas('dosen',function($query)
// 	{
// 		$query->where('nama','like','%s%');
// 	})
// 	->orWhereHas('matakuliah',function($kueri)
// 	{
// 		$kueri->where('title','like','%a%');
// 	})
// 	->with('dosen')
// 	->groupBy('dosen_id')
// 	->get();
// });

// Route::get('/',function(Illuminate\Http\Request $request)
// {
// 	echo "ini adalah request dari method get ". $request->nama;
// });

// use Illuminate\Http\Request;
// Route::get('/',function(){
// 	echo Form::open(['url'=>'/']).
// 	Form::label('nama').
// 	Form::text('nama',null).
// 	Form::submit('kirim').
// 	Form::close();
// });
// Route::post('/',function(Request $request){
// 	echo "Hasil dari form input tadi nama : ".$request->nama;
// });

/*Route::get('/dosen','dosenc@awal');
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
*/