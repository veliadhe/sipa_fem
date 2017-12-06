<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tambahadmin(){
      $active = 1;
      $role = Auth::user()->role;
      if(($role!=='administrator')){
        return redirect('/');
      }
      return view('pages.tambah-administrator', compact('active','role'));
    }

    public function tambahmahasiswa(){
      $active = 2;
      $role = Auth::user()->role;
      if(($role!=='mahasiswa')){
        return redirect('/');
      }
      return view('pages.tambah-mahasiswa', compact('active','role'));
    }
}
