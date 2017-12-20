<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notifikasi extends Controller
{
  public function example(){
    $user = User::find(1);
    $surat_aktif_kuliah = surat_aktif_kuliah::find(1);

    $user->notify(new suratJadi($surat_aktif_kuliah));
  }
}
