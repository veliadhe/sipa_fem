<?php

namespace App\Http\Controllers;
use App\surat_rekomendasi_beasiswa;

use Illuminate\Http\Request;
use Charts;

class surat_rekomendasi_beasiswa_Controller extends Controller
{
  public function index(){
    $id_user = auth()->id();
    $surat_rekomendasi_beasiswas = surat_rekomendasi_beasiswa::where('id_user', $id_user)->get();
    return view('surat_rekomendasi_beasiswa.index', compact('surat_rekomendasi_beasiswas'));
  }

  public function create(){
    return view('surat_rekomendasi_beasiswa.create');
  }

    public function store(){
      $this->validate(request(),[
        'semester' => 'required|integer|max:10',
        'ipk' => 'required',
        'sks' => 'required',
        'fcktm' => 'required|image',
        'fcspp' => 'required|image',
        'formulir_beasiswa' => 'required|image',
        'beasiswa' => 'required|image',
        'surat_pernyataan_sedang_tidak_menerima_beasiswa' => 'required|image',
      ]);
        surat_rekomendasi_beasiswa::create([
      'semester' => request('semester'),
      'ipk' => request('ipk'),
      'sks' => request('sks'),
      'fcktm' => request('fcktm') -> store('fc_ktm'),
      'fcspp' => request('fcspp') ->  store('fc_spp'),
      'formulir_beasiswa' => request('formulir_beasiswa') ->  store('formulir_beasiswa'),
      'beasiswa' => request('beasiswa') ->  store('beasiswa'),
      'surat_pernyataan_sedang_tidak_menerima_beasiswa' => request('surat_pernyataan_sedang_tidak_menerima_beasiswa') ->  store('surat_pernyataan_sedang_tidak_menerima_beasiswa'),
      'id_user' => auth()->id()
    ]);
  return redirect()->route('surat_rekomendasi_beasiswa.create')->withInfo('surat telah dikirim');
  }

  public function beasiswa($id){
    $surat_rekomendasi_beasiswa = surat_rekomendasi_beasiswa::find($id);
    return view('surat_rekomendasi_beasiswa.beasiswa', compact('surat_rekomendasi_beasiswa'));

  }

  public function chart(){
    $chart = Charts::database(surat_rekomendasi_beasiswa::all(), 'line', 'highcharts')
      ->title('Surat rekomendasi beasiswa')
      ->responsive(true)
      ->groupByMonth()
      ->elementLabel("Jumlah Surat");

      return view('surat_rekomendasi_beasiswa.chart', ['chart' => $chart]);
  }
}
