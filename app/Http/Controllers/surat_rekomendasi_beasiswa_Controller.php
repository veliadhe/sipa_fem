<?php

namespace App\Http\Controllers;
use App\surat_rekomendasi_beasiswa;
use App\User;
use App\dokumen;
use Illuminate\Http\Request;
use Charts;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Mail;

class surat_rekomendasi_beasiswa_Controller extends Controller
{
  public function index(){
    $id_user = auth()->id();
    $surat_rekomendasi_beasiswas = surat_rekomendasi_beasiswa::where('id_user', $id_user)->get();
    return view('surat_rekomendasi_beasiswa.index', compact('surat_rekomendasi_beasiswas'));
  }

  public function create(){
    $result = dokumen::where('id_dokumen', '=', '1')->get();
    $result2 = dokumen::where('id_dokumen', '=', '2')->get();
    return view('surat_rekomendasi_beasiswa.create', compact('result', 'result2'));
  }

    public function store(){
      $this->validate(request(),[
        'semester' => 'required|integer|max:10',
        'ipk' => 'required',
        'sks' => 'required',
        'fcktm' => 'required|image',
        'fcspp' => 'required|image',
        'formulir_beasiswa' => 'required|image',
        'beasiswa' => 'required|mimes:doc,docx',
        'surat_pernyataan_sedang_tidak_menerima_beasiswa' => 'required|mimes:doc,docx',
      ]);
        surat_rekomendasi_beasiswa::create([
      'semester' => request('semester'),
      'ipk' => request('ipk'),
      'sks' => request('sks'),
      'fcktm' => request('fcktm') -> store('fc_ktm'),
      'fcspp' => request('fcspp') ->  store('fc_spp'),
      'formulir_beasiswa' => request('formulir_beasiswa') ->  store('formulir_beasiswa'),
      'beasiswa' => request('beasiswa') ->  store('beasiswa'),
      'surat_pernyataan_sedang_tidak_menerima_beasiswa' => request('surat_pernyataan_sedang_tidak_menerima_beasiswa') ->  store('surat_pernyataan_sedang_tidak_menerima_beasiswa'),
      'id_user' => auth()->id()
    ]);
  return redirect()->route('surat_rekomendasi_beasiswa.create')->withInfo('surat telah dikirim');
  }

  public function beasiswa($id_surat_rekomendasi_beasiswa){
    $surat_rekomendasi_beasiswa = surat_rekomendasi_beasiswa::find($id_surat_rekomendasi_beasiswa);
    return view('surat_rekomendasi_beasiswa.beasiswa', compact('surat_rekomendasi_beasiswa'));

  }

  public function chart(){
    $chart = Charts::database(surat_rekomendasi_beasiswa::all(), 'line', 'highcharts')
      ->title('Surat rekomendasi beasiswa')
      ->responsive(true)
      ->groupByMonth()
      ->elementLabel("Jumlah Surat");

      return view('surat_rekomendasi_beasiswa.chart', ['chart' => $chart]);
  }

  public function createAdmin(){
   $result = DB::table('surat_rekomendasi_beasiswas')
                     ->join('users','surat_rekomendasi_beasiswas.id_user','=','users.id')
                     ->select('surat_rekomendasi_beasiswas.*','users.*')
                     ->where('surat_rekomendasi_beasiswas.status', '=', '0')
                     ->get();
                 //dd($result);
   return view('surat_rekomendasi_beasiswa.createAdmin', compact('result'));
  }

  public function indexAdmin(){
  $result = DB::table('surat_rekomendasi_beasiswas')
                    ->join('users','surat_rekomendasi_beasiswas.id_user','=','users.id')
                    ->select('surat_rekomendasi_beasiswas.*','users.*')
                    ->where('surat_rekomendasi_beasiswas.status', '=', '1')
                    ->get();
                //dd($result);
  return view('surat_rekomendasi_beasiswa.indexAdmin', compact('result'));
  }

  public function update($id_surat_rekomendasi_beasiswa){
  surat_rekomendasi_beasiswa::where('id_surat_rekomendasi_beasiswa', $id_surat_rekomendasi_beasiswa)-> update([
    'status' => request('status'),
  ]);

  $data = array(
    'email' => request('email'),
    'subjek' =>request('subjek'),
    'bodyMessage' => request('message'),
  );
  //dd($data);
    Mail::send('emails.contact', $data, function($message) use ($data){
      $message->from('administrasiakademikFEM@example.com');
      $message->to($data['email']);
      $message->subject($data['subjek']);
    });

  return redirect('/surat_rekomendasi_beasiswa/createAdmin');
  }


  public function userProfil($id_surat_rekomendasi_beasiswa){
  $result = DB::table('surat_rekomendasi_beasiswas')
                    ->join('users','surat_rekomendasi_beasiswas.id_user','=','users.id')
                    ->select('surat_rekomendasi_beasiswas.*','users.*')
                    ->where('surat_rekomendasi_beasiswas.id_surat_rekomendasi_beasiswa', '=', $id_surat_rekomendasi_beasiswa)
                    ->get();
              //  dd($result);
  return view('surat_rekomendasi_beasiswa.userProfil', compact('result'));
  }

  public function lihatDokumen(){
    $result = dokumen::all();
    return view('dokumen.lihatDokumen', compact('result'));
  }

  public function editDokumen($id_dokumen){
    $dokumenku = dokumen::where('id_dokumen',$id_dokumen)->get();
    return view('dokumen.editDokumen', compact('dokumenku'));
  }

  public function updateDokumen($id_dokumen){
    $this->validate(request(),[
      'dokumen' => 'required|mimes:doc,docx',
    ]);
    dokumen::where('id_dokumen', $id_dokumen)-> update([
      'dokumen' => request('dokumen')->store('dokumen'),
    ]);
    return redirect('/dokumen/lihatDokumen');
  }


}
