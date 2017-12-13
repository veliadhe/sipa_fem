<?php

namespace App\Http\Controllers;
use App\surat_tidak_menerima_beasiswa;

use Illuminate\Http\Request;
use Charts;

class surat_tidak_menerima_beasiswa_Controller extends Controller
{
  public function index(){
    $id_user = auth()->id();
    $surat_tidak_menerima_beasiswas = surat_tidak_menerima_beasiswa::where('id_user', $id_user)->get();
    return view('surat_tidak_menerima_beasiswa.index', compact('surat_tidak_menerima_beasiswas'));
  }

    public function create(){
      return view('surat_tidak_menerima_beasiswa.create');
    }

      public function store(){
        $this->validate(request(),[
          'semester' => 'required|integer|max:10',
        ]);
      surat_tidak_menerima_beasiswa::create([
        'semester' => request('semester'),
        'id_user' => auth()->id()
      ]);

      return redirect()->route('surat_tidak_menerima_beasiswa.create')->withInfo('surat telah dikirim');
    }

    public function chart(){
      $chart = Charts::database(surat_tidak_menerima_beasiswa::all(), 'bar', 'highcharts')
        ->title('Surat tidak menerima beasiswa')
        ->responsive(true)
        ->groupByMonth()
        ->elementLabel("Jumlah Surat");

        return view('surat_tidak_menerima_beasiswa.chart', ['chart' => $chart]);
    }

}
