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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/surat_aktif_kuliah/create', 'surat_aktif_kuliah_Controller@create') -> name('surat_aktif_kuliah.create');
Route::get('/surat_aktif_kuliah', 'surat_aktif_kuliah_Controller@index') -> name('surat_aktif_kuliah.index');
Route::get('/surat_aktif_kuliah/chart', 'surat_aktif_kuliah_Controller@chart') -> name('surat_aktif_kuliah.chart');
Route::post('/surat_aktif_kuliah/create', 'surat_aktif_kuliah_Controller@store') -> name('surat_aktif_kuliah.store');
Route::get('/surat_tidak_menerima_beasiswa/create', 'surat_tidak_menerima_beasiswa_Controller@create') -> name('surat_tidak_menerima_beasiswa.create');
Route::get('/surat_tidak_menerima_beasiswa', 'surat_tidak_menerima_beasiswa_Controller@index') -> name('surat_tidak_menerima_beasiswa.index');
Route::get('/surat_tidak_menerima_beasiswa/chart', 'surat_tidak_menerima_beasiswa_Controller@chart') -> name('surat_tidak_menerima_beasiswa.chart');
Route::post('/surat_tidak_menerima_beasiswa/create', 'surat_tidak_menerima_beasiswa_Controller@store') -> name('surat_tidak_menerima_beasiswa.store');
Route::get('/surat_rekomendasi_beasiswa/create', 'surat_rekomendasi_beasiswa_Controller@create') -> name('surat_rekomendasi_beasiswa.create');
Route::post('/surat_rekomendasi_beasiswa/create', 'surat_rekomendasi_beasiswa_Controller@store') -> name('surat_rekomendasi_beasiswa.store');
Route::get('/surat_rekomendasi_beasiswa/{id_surat_rekomendasi}/beasiswa', 'surat_rekomendasi_beasiswa_Controller@beasiswa') -> name('surat_rekomendasi_beasiswa.beasiswa');
Route::post('/surat_rekomendasi_beasiswa/{id_surat_rekomendasi}/beasiswa', 'beasiswa_Controller@store') -> name('surat_rekomendasi_beasiswa.beasiswa.store');
Route::post('/tambah-administrator', 'DashboardController@admin') -> name('pages.tambah-administrator');
Route::post('/tambah-mahasiswa', 'DashboardController@tammahasiswa') -> name('pages.tambah-mahasiswa');
