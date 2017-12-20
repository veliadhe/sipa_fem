<?php

namespace App\Http\Controllers;
use App\surat_aktif_kuliah;
use App\User;
use App\surat_tidak_menerima_beasiswa;
use App\surat_rekomendasi_beasiswa;
use Charts;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         // $this->middleware('auth');
         $this->middleware('rule:mahasiswa')->except('cobalagi');
     }
    public function index()
    {
      $id_user = auth()->id();
      $chart = Charts::multiDatabase('line','material')

              ->dataset('First', user::where('id', $id_user)->get())
              ->dataset('Second', surat_aktif_kuliah::where('id_user', $id_user)->get())
              ->dataset('Third', surat_rekomendasi_beasiswa::where('id_user', $id_user)->get())
              ->dataset('Fourth', surat_tidak_menerima_beasiswa::where('id_user', $id_user)->get())
              ->groupByMonth(2017, true);

        return view('beranda', ['chart' => $chart]);
    }
}
