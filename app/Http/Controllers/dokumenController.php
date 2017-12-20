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
        'dokumen' => 'required|mimes:doc,docx',
      ]);

    dokumen::create([
      'nama_dokumen' => request('nama_dokumen'),
      'dokumen' => request('dokumen')-> store('dokumen'),
    ]);

    return redirect('/dokumen/lihatDokumen');
  }

  public function downfunc(){
    $dokumens = dokumen::all();
    return view('download.viewfile', compact('dokumens'));
  }
}
