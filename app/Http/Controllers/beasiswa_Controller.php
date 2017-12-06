<?php

namespace App\Http\Controllers;
use App\surat_rekomendasi_beasiswa;
use App\beasiswa;

use Illuminate\Http\Request;

class beasiswa_Controller extends Controller
{
  public function create(){
    $id_surat_rekomendasi = surat_rekomendasi_beasiswa::where('id_surat_rekomendasi', $id_surat_rekomendasi)->get();
    //$id_user = auth()->id();
    return view('beasiswa.create', compact('id_surat_rekomendasi'));
  }

    public function store(Request $request, surat_rekomendasi_beasiswa $id_surat_rekomendasi){
        $surat_rekomendasi_beasiswa = surat_rekomendasi_beasiswa::find($id_surat_rekomendasi)->get();
        beasiswa::create([
          'nama_beasiswa' => request('nama_beasiswa'),
          'periode' => request('periode'),
          'dana_perbulan' => request('dana_perbulan'),
          'status' => request('status'),
          'id_surat_rekomendasi_beasiswa' => $surat_rekomendasi_beasiswa->id_surat_rekomendasi(),
          'id_user' => auth()->id()
        ]);

    return redirect()->route('home')->withInfo('surat telah dikirim');
  }
}
