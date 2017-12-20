<?php

namespace App\Http\Controllers;
use App\surat_aktif_kuliah;
use App\User;
use App\surat_tidak_menerima_beasiswa;
use App\surat_rekomendasi_beasiswa;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Charts;
use Mail;

class surat_aktif_kuliah_Controller extends Controller
{
  public function index(){
    $id_user = auth()->id();
    $surat_aktif_kuliahs = surat_aktif_kuliah::where('id_user', $id_user)->get();
    return view('surat_aktif_kuliah.index', compact('surat_aktif_kuliahs'));
  }
    public function create(){
      return view('surat_aktif_kuliah.create');
    }

      public function store(){
        $this->validate(request(),[
          'semester' => 'required|integer|max:10',
          'kebutuhan' => 'required',
          'fcktm' => 'required|image',
          'fcspp' => 'required|image',
        ]);
      surat_aktif_kuliah::create([
        'semester' => request('semester'),
        'kebutuhan' => request('kebutuhan'),
        'fcktm' => request('fcktm') -> store('fc_ktm'),
        'fcspp' => request('fcspp') -> store('fc_spp'),
        'id_user' => auth()->id()
      ]);

      return redirect()->route('surat_aktif_kuliah.create')->withInfo('surat telah dikirim');
    }

    public function chart(){
      $id_user = auth()->id();
      $chart = Charts::multiDatabase('line','material')

              ->dataset('Jumlah User', user::all())
              ->dataset('Surat Aktif Kuliah', surat_aktif_kuliah::all())
              ->dataset('Surat Rekomendasi Beasiswa', surat_rekomendasi_beasiswa::all())
              ->dataset('Surat Tidak Menerima Beasiswa', surat_tidak_menerima_beasiswa::all())
              ->groupByMonth()
              ->title('Surat dan User')
              ->responsive(false);
        return view('surat_aktif_kuliah.chart', ['chart' => $chart]);
    }

    public function createAdmin(){
     $result = DB::table('surat_aktif_kuliahs')
                       ->join('users','surat_aktif_kuliahs.id_user','=','users.id')
                       ->select('surat_aktif_kuliahs.*','users.*')
                       ->where('surat_aktif_kuliahs.status', '=', '0')
                       ->get();
                   //dd($result);
     return view('surat_aktif_kuliah.createAdmin', compact('result'));
   }

   public function indexAdmin(){
    $result = DB::table('surat_aktif_kuliahs')
                      ->join('users','surat_aktif_kuliahs.id_user','=','users.id')
                      ->select('surat_aktif_kuliahs.*','users.*')
                      ->where('surat_aktif_kuliahs.status', '=', '1')
                      ->get();
                  //dd($result);
    return view('surat_aktif_kuliah.indexAdmin', compact('result'));
  }

  public function update($id_surat_aktif_kuliah){
    surat_aktif_kuliah::where('id_surat_aktif_kuliah', $id_surat_aktif_kuliah)-> update([
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


    return redirect('/surat_aktif_kuliah/createAdmin');
  }


  public function userProfil($id_surat_aktif_kuliah){
    $result = DB::table('surat_aktif_kuliahs')
                      ->join('users','surat_aktif_kuliahs.id_user','=','users.id')
                      ->select('surat_aktif_kuliahs.*','users.*')
                      ->where('surat_aktif_kuliahs.id_surat_aktif_kuliah', '=', $id_surat_aktif_kuliah)
                      ->get();
                //  dd($result);
    return view('surat_aktif_kuliah.userProfil', compact('result'));
 }


}
