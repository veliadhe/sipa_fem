<?php

namespace App\Http\Controllers;
use App\surat_aktif_kuliah;

use Illuminate\Http\Request;
use Charts;

class surat_aktif_kuliah_Controller extends Controller
{
  public function index(){
    $id_user = auth()->id();
    $surat_aktif_kuliahs = surat_aktif_kuliah::where('id_user', $id_user)->get();
    return view('surat_aktif_kuliah.index', compact('surat_aktif_kuliahs'));
  }
    public function create(){
      return view('surat_aktif_kuliah.create');
    }

      public function store(){
        $this->validate(request(),[
          'semester' => 'required|integer|max:10',
          'kebutuhan' => 'required',
          'fcktm' => 'required|image',
          'fcspp' => 'required|image',
        ]);
      surat_aktif_kuliah::create([
        'semester' => request('semester'),
        'kebutuhan' => request('kebutuhan'),
        'fcktm' => request('fcktm') -> store('fc_ktm'),
        'fcspp' => request('fcspp') -> store('fc_spp'),
        'id_user' => auth()->id()
      ]);

      return redirect()->route('home')->withInfo('surat telah dikirim');
    }

    public function chart(){
      $chart = Charts::database(surat_aktif_kuliah::all(), 'bar', 'highcharts')
        ->title('Surat aktif kuliah')
        ->responsive(true)
        ->groupByMonth()
        ->elementLabel("Jumlah Surat");

        return view('surat_aktif_kuliah.chart', ['chart' => $chart]);
    }

}
