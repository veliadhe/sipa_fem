<?php

namespace App\Http\Controllers;

use App\surat_aktif_kuliah;
use Illuminate\Http\Request;

class penghubung_surat_aktif_Controller extends Controller
{
    public function store(){
    penghubung_surat_aktif::create([
      'id_user'=>auth()->id(),
      'id_surat_aktif_kuliah'=> surat_aktif_kuliah()->id_surat_akti_kuliah()
    ]);

    return redirect()->route('home')->withInfo('surat telah dikirim');
  }
}
