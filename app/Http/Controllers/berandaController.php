<?php

namespace App\Http\Controllers;
use App\surat_aktif_kuliah;
use App\User;
use App\surat_tidak_menerima_beasiswa;
use App\surat_rekomendasi_beasiswa;

use Illuminate\Http\Request;
use Charts;

class berandaController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */

  public function index()
  {
    $id_user = auth()->id();
    $chart = Charts::multiDatabase('line','material')
            ->title(' ')
            ->dataset('Surat Aktif Kuliah', surat_aktif_kuliah::where('id_user', $id_user)->get())
            ->dataset('Surat Rekomendasi Beasiswa', surat_rekomendasi_beasiswa::where('id_user', $id_user)->get())
            ->dataset('Surat Tidak Menerima Beasiswa', surat_tidak_menerima_beasiswa::where('id_user', $id_user)->get())
            ->groupByMonth(2017, true);

      return view('beranda', ['chart' => $chart]);
  }

  public function dashboardAdmin()
{
  $chart = Charts::multiDatabase('line','material')
          ->title(' ')
          ->dataset('User', user::all())
          ->dataset('Surat Aktif Kuliah', surat_aktif_kuliah::all())
          ->dataset('Surat Rekomendasi Beasiswa', surat_rekomendasi_beasiswa::all())
          ->dataset('Surat Tidak Menerima Beasiswa', surat_tidak_menerima_beasiswa::all())
          ->groupByMonth(2017, true);
    return view('dashboardAdmin', ['chart' => $chart]);
}
}
