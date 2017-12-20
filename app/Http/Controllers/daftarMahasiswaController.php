<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\surat_aktif_kuliah;
use App\User;
use App\surat_tidak_menerima_beasiswa;
use App\surat_rekomendasi_beasiswa;


class daftarMahasiswaController extends Controller
{
  public function daftarMahasiswa(){
    $result = user::all()->where('roles_id','=','1');
    return view('user.daftarMahasiswa', compact('result'));
  }

  public function lihatMahasiswa($id){
    $result = user::where('id',$id)->get();
    return view('user.lihatMahasiswa', compact('result'));
  }

  public function editMahasiswa($id){
    $result = user::where('id', $id)->get();
    return view('user.editMahasiswa', compact('result'));
  }

  public function updateMahasiswa($id){
    user::where('id', $id)-> update([
      'name' => request('name'),
      'email' => request('email'),
      'username' => request('username'),
      'password' => bcrypt('password'),
      'nrp' => request('nrp'),
      'tempat_lahir' => request('tempat_lahir'),
      'tanggal_lahir' => request('tanggal_lahir'),
      'departemen' => request('departemen'),
      'alamat' => request('alamat'),
      'no_hp' => request('no_hp'),
    ]);

    return redirect('/user/daftarMahasiswa');
  }

  public function tambahMahasiswa(){
    return view('user.tambahMahasiswa');
  }

  public function tambahMahasiswaStore(){
    $this->validate(request(),[
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'username' => 'required|string|max:20',
      'nrp' => 'required|string|max:9',
      'tempat_lahir' => 'required|string|max:255',
      'tanggal_lahir' => 'required|string|max:10',
      'departemen' => 'required|string:20',
      'alamat' => 'required|string:255',
      'no_hp' => 'required|string:12',
      'password' => 'required|string|min:6|confirmed',
    ]);

    User::create([
        'name' => request('name'),
        'email' => request('email'),
        'username' => request('username'),
        'nrp' => request('nrp'),
        'tempat_lahir' => request('tempat_lahir'),
        'tanggal_lahir' => request('tanggal_lahir'),
        'departemen' => request('departemen'),
        'alamat' => request('alamat'),
        'no_hp' => request('no_hp'),
        'password' => bcrypt('password'),
    ]);

  return redirect('/user/daftarMahasiswa');
}

public function destroy($id){
  user::where('id', $id)->delete();
  surat_aktif_kuliah::where('id_user', $id)->delete();
  surat_tidak_menerima_beasiswa::where('id_user', $id)->delete();
  surat_rekomendasi_beasiswa::where('id_user', $id)->delete();
  return redirect('/user/daftarMahasiswa');
}
}
