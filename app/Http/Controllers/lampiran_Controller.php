<?php

namespace App\Http\Controllers;
use App\surat_rekomendasi_beasiswa;
use App\lampiran;

use Illuminate\Http\Request;

class lampiran_Controller extends Controller
{
  public function create(){
    return view('lampiran.create');
  }

    public function store(){
    lampiran::create([
      'fotokopi_ktm' => request('fotokopi_ktm'),
      'fotokopi_spp' => request('fotokopi_spp'),
      'formulir_beasiswa' => request('formulir_beasiswa'),
      'surat_pernyataan_sedang_tidak_menerima_beasiswa' => request('surat_pernyataan_sedang_tidak_menerima_beasiswa'),
      'id_surat_rekomendasi_beasiswa' => surat_rekomendasi_beasiswa_Controller()->id_surat_rekomendasi()
    ]);
    return redirect()->route('home')->withInfo('surat telah dikirim');
  }
}
