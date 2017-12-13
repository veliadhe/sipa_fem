<?php

namespace App\Http\Controllers;

use App\dokumen;

use Illuminate\Http\Request;

class dokumenController extends Controller
{
  public function create(){
    return view('dokumen.create');
  }

    public function store(){
      $this->validate(request(),[
        'nama_dokumen' => 'required|string',
        'dokumen' => 'required',
      ]);
    dokumen::create([
      'nama_dokumen' => request('nama_dokumen'),
      'dokumen' => request('dokumen')-> store('dokumen'),
    ]);

    return redirect()->route('dokumen.create')->withInfo('surat telah dikirim');
  }

  public function downfunc(){
    $dokumens = dokumen::all();
    return view('download.viewfile', compact('dokumens'));
  }
}
