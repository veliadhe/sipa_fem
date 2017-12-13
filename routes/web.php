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
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/surat_rekomendasi_beasiswa/coba', function () {
    return view('surat_rekomendasi_beasiswa.coba');
});

Route::get('/pageAksesKhusus', function () {
    return view('pageAksesKhusus');
});

Route::get('/dashboardAdmin', function () {
    return view('dashboardAdmin');
});
Route::get('/dashboardAdmin', function () {
    return view('dashboardAdmin');
});
Route::get('delete', 'adminController@delete');
Route::get('update', 'adminController@update');
Auth::routes();

Route::get('/dashboardAdmin', 'berandaController@dashboardAdmin')->name('dashboardAdmin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/beranda', 'berandaController@index')->name('beranda');
Route::get('/surat_aktif_kuliah/create', 'surat_aktif_kuliah_Controller@create') -> name('surat_aktif_kuliah.create');
Route::get('/surat_aktif_kuliah/createAdmin', 'surat_aktif_kuliah_Controller@createAdmin') -> name('surat_aktif_kuliah.createAdmin');
Route::get('/surat_aktif_kuliah/indexAdmin', 'surat_aktif_kuliah_Controller@indexAdmin') -> name('surat_aktif_kuliah.indexAdmin');
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
Route::get('/dokumen/create', 'dokumenController@create') -> name('dokumen.create');
Route::post('/dokumen/store', 'dokumenController@store') -> name('dokumen.store');
Route::get('/viewAlldownloadfile', 'dokumenController@downfunc');
Route::get('/admin/SuratMasukAktifKuliah', 'surat_aktif_kuliah_Controller@surat_masuk_admin') -> name('surat_masuk_admin.index');


Route::patch('/surat_aktif_kuliah/{id_surat_aktif_kuliah}/createAdmin', 'surat_aktif_kuliah_Controller@update')->name('createAdmin.update');
