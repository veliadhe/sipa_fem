<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/beranda', function () {
    return view('beranda');
});



Route::get('delete', 'adminController@delete');
Route::get('update', 'adminController@update');

Route::get('logout', function () {
    Auth::logout();
    return view('welcome');
});

Route::group(['middleware' => ['auth','rule:admin']], function() {
  Route::get('/dashboardAdmin', function () {
      return view('dashboardAdmin');
  });

  Route::get('/dashboardAdmin', 'berandaController@dashboardAdmin')->name('dashboardAdmin');
  Route::get('/surat_aktif_kuliah/createAdmin', 'surat_aktif_kuliah_Controller@createAdmin') -> name('surat_aktif_kuliah.createAdmin');
  Route::get('/surat_aktif_kuliah/indexAdmin', 'surat_aktif_kuliah_Controller@indexAdmin') -> name('surat_aktif_kuliah.indexAdmin');
  Route::patch('/surat_aktif_kuliah/{id_surat_aktif_kuliah}/createAdmin', 'surat_aktif_kuliah_Controller@update')->name('surat_aktif_kuliahcreateAdmin.update');
  Route::get('/surat_aktif_kuliah/{id_surat_aktif_kuliah}/userProfil', 'surat_aktif_kuliah_Controller@userProfil')->name('surat_aktif_kuliah.userProfil');

  Route::get('/surat_rekomendasi_beasiswa/createAdmin', 'surat_rekomendasi_beasiswa_Controller@createAdmin') -> name('surat_rekomendasi_beasiswa.createAdmin');
  Route::get('/surat_rekomendasi_beasiswa/indexAdmin', 'surat_rekomendasi_beasiswa_Controller@indexAdmin') -> name('surat_rekomendasi_beasiswa.indexAdmin');
  Route::patch('/surat_rekomendasi_beasiswa/{id_surat_rekomendasi_beasiswa}/createAdmin', 'surat_rekomendasi_beasiswa_Controller@update')->name('surat_rekomendasi_beasiswacreateAdmin.update');
  Route::get('/surat_rekomendasi_beasiswa/{id_surat_rekomendasi_beasiswa}/userProfil', 'surat_rekomendasi_beasiswa_Controller@userProfil')->name('surat_rekomendasi_beasiswa.userProfil');

  Route::get('/surat_tidak_menerima_beasiswa/createAdmin', function () {
      return view('surat_tidak_menerima_beasiswa.createAdmin');
  });

  Route::get('/surat_tidak_menerima_beasiswa/createAdmin', 'surat_tidak_menerima_beasiswa_Controller@createAdmin') -> name('surat_tidak_menerima_beasiswa.createAdmin');
  Route::get('/surat_tidak_menerima_beasiswa/indexAdmin', 'surat_tidak_menerima_beasiswa_Controller@indexAdmin') -> name('surat_tidak_menerima_beasiswa.indexAdmin');
  Route::patch('/surat_tidak_menerima_beasiswa/{id_surat_tidak_menerima_beasiswa}/createAdmin', 'surat_tidak_menerima_beasiswa_Controller@update')->name('surat_tidak_menerima_beasiswacreateAdmin.update');
  Route::get('/surat_tidak_menerima_beasiswa/{id_surat_tidak_menerima_beasiswa}/userProfil', 'surat_tidak_menerima_beasiswa_Controller@userProfil')->name('surat_tidak_menerima_beasiswa.userProfil');

  Route::get('/dokumen/create', 'dokumenController@create') -> name('dokumen.create');
  Route::post('/dokumen/create', 'dokumenController@store') -> name('dokumen.store');
  Route::get('/dokumen/lihatDokumen', 'surat_rekomendasi_beasiswa_Controller@lihatDokumen') -> name('dokumen.lihatDokumen');

  Route::get('/dokumen/{id_dokumen}/editDokumen', 'surat_rekomendasi_beasiswa_Controller@editDokumen') -> name('dokumen.editDokumen');
  Route::patch('/dokumen/{id_dokumen}/editDokumen', 'surat_rekomendasi_beasiswa_Controller@updateDokumen') -> name('dokumen.updateDokumen');


  Route::get('/user/daftarMahasiswa', 'daftarMahasiswaController@daftarMahasiswa') -> name('user.daftarMahasiswa');
  Route::get('/user/{id}/daftarMahasiswa', 'daftarMahasiswaController@destroy') -> name('user.destroyMahasiswa');
  Route::get('/user/{id}/lihatMahasiswa', 'daftarMahasiswaController@lihatMahasiswa')->name('user.lihatMahasiswa');

  Route::get('/user/{id}/editMahasiswa', 'daftarMahasiswaController@editMahasiswa') -> name('user.editMahasiswa');
  Route::patch('/user/{id}/editMahasiswa', 'daftarMahasiswaController@updateMahasiswa') -> name('user.updateMahasiswa');

  Route::get('/user/tambahMahasiswa', 'daftarMahasiswaController@tambahMahasiswa') -> name('user.tambahMahasiswa');
  Route::post('/user/tambahMahasiswa', 'daftarMahasiswaController@tambahMahasiswaStore') -> name('user.tambahMahasiswaStore');
  Route::delete('user/{id}/deleteMahasiswa', 'daftarMahasiswaController@destroy') -> name('user.deleteMahasiswa');
  Route::get('/viewAlldownloadfile', 'dokumenController@downfunc');
  Route::get('/admin/SuratMasukAktifKuliah', 'surat_aktif_kuliah_Controller@surat_masuk_admin') -> name('surat_masuk_admin.index');

});


Route::group(['middleware' => ['auth','rule:mahasiswa']], function() {

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/beranda', 'berandaController@index')->name('beranda');
  Route::get('/surat_aktif_kuliah/create', 'surat_aktif_kuliah_Controller@create') -> name('surat_aktif_kuliah.create');
  Route::get('/surat_aktif_kuliah', 'surat_aktif_kuliah_Controller@index') -> name('surat_aktif_kuliah.index');
  Route::get('/surat_aktif_kuliah/chart', 'surat_aktif_kuliah_Controller@chart') -> name('surat_aktif_kuliah.chart');
  Route::post('/surat_aktif_kuliah/create', 'surat_aktif_kuliah_Controller@store') -> name('surat_aktif_kuliah.store');
  Route::get('/surat_tidak_menerima_beasiswa/create', 'surat_tidak_menerima_beasiswa_Controller@create') -> name('surat_tidak_menerima_beasiswa.create');
  Route::get('/surat_tidak_menerima_beasiswa', 'surat_tidak_menerima_beasiswa_Controller@index') -> name('surat_tidak_menerima_beasiswa.index');
  Route::get('/surat_tidak_menerima_beasiswa/chart', 'surat_tidak_menerima_beasiswa_Controller@chart') -> name('surat_tidak_menerima_beasiswa.chart');
  Route::post('/surat_tidak_menerima_beasiswa/create', 'surat_tidak_menerima_beasiswa_Controller@store') -> name('surat_tidak_menerima_beasiswa.store');
  Route::get('/surat_rekomendasi_beasiswa/create', 'surat_rekomendasi_beasiswa_Controller@create') -> name('surat_rekomendasi_beasiswa.create');
  Route::get('/surat_rekomendasi_beasiswa', 'surat_rekomendasi_beasiswa_Controller@index') -> name('surat_rekomendasi_beasiswa.index');
  Route::get('/surat_rekomendasi_beasiswa/chart', 'surat_rekomendasi_beasiswa_Controller@chart') -> name('surat_rekomendasi_beasiswa.chart');
  Route::post('/surat_rekomendasi_beasiswa/create', 'surat_rekomendasi_beasiswa_Controller@store') -> name('surat_rekomendasi_beasiswa.store');
});
