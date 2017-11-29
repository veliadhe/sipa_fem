<?php

namespace App\Http\Controllers;
use App\surat_rekomendasi_beasiswa;

use Illuminate\Http\Request;

class surat_rekomendasi_beasiswa_Controller extends Controller
{
  public function create(){
    return view('surat_rekomendasi_beasiswa.create');
  }

    public function store(){
    surat_rekomendasi_beasiswa::create([
      'semester' => request('semester'),
      'ipk' => request('ipk'),
      'sks' => request('sks'),
      'id_user' => auth()->id()
    ]);
    return redirect()->route('beasiswa.create');
  }
}
