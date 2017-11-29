<?php

namespace App\Http\Controllers;
use App\surat_aktif_kuliah;

use Illuminate\Http\Request;

class surat_aktif_kuliah_Controller extends Controller
{
    public function create(){
      return view('surat_aktif_kuliah.create');
    }

      public function store(){
      surat_aktif_kuliah::create([
        'semester' => request('semester'),
        'kebutuhan' => request('kebutuhan'),
        'fcktm' => request('fcktm') -> store('fc_ktm'),
        'fcspp' => request('fcspp') -> store('fc_spp'),
        'id_user' => auth()->id()
      ]);

      return redirect()->route('home')->withInfo('surat telah dikirim');
    }
}
