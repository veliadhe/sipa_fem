<?php

namespace App\Http\Controllers;
use App\surat_rekomendasi_beasiswa;
use App\beasiswa;

use Illuminate\Http\Request;

class beasiswa_Controller extends Controller
{
  public function create($id_surat_rekomendasi){
    $post = surat_rekomendasi_beasiswa::find($id_surat_rekomendasi);
    return view('beasiswa.create', compact('surat_rekomendasi_beasiswa'));
  }

    public function store(Request $request, surat_rekomendasi_beasiswa $post){
    beasiswa::create([
      'nama_beasiswa' => request('nama_beasiswa'),
      'periode' => request('periode'),
      'dana_perbulan' => request('dana_perbulan'),
      'status' => request('status'),
      'id_surat_rekomendasi_beasiswa' => $post->id_surat_rekomendasi()
    ]);
    return redirect()->route('lampiran.create');
  }
}
