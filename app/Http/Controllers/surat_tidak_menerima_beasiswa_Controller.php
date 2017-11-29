<?php

namespace App\Http\Controllers;
use App\surat_tidak_menerima_beasiswa;

use Illuminate\Http\Request;

class surat_tidak_menerima_beasiswa_Controller extends Controller
{
    public function create(){
      return view('surat_tidak_menerima_beasiswa.create');
    }

      public function store(){
      surat_tidak_menerima_beasiswa::create([
        'semester' => request('semester'),
        'id_user' => auth()->id()
      ]);

      return redirect()->route('home')->withInfo('surat telah dikirim');
    }
}
