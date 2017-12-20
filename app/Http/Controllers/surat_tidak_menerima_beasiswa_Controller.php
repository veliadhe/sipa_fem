<?php

namespace App\Http\Controllers;
use App\surat_tidak_menerima_beasiswa;
use App\User;
use Illuminate\Http\Request;
use Charts;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Mail;

class surat_tidak_menerima_beasiswa_Controller extends Controller
{
  public function index(){
    $id_user = auth()->id();
    $surat_tidak_menerima_beasiswas = surat_tidak_menerima_beasiswa::where('id_user', $id_user)->get();
    return view('surat_tidak_menerima_beasiswa.index', compact('surat_tidak_menerima_beasiswas'));
  }

    public function create(){
      return view('surat_tidak_menerima_beasiswa.create');
    }

      public function store(){
        $this->validate(request(),[
          'semester' => 'required|integer|max:10',
        ]);
      surat_tidak_menerima_beasiswa::create([
        'semester' => request('semester'),
        'id_user' => auth()->id()
      ]);

      return redirect()->route('surat_tidak_menerima_beasiswa.create')->withInfo('surat telah dikirim');
    }

    public function chart(){
      $chart = Charts::database(surat_tidak_menerima_beasiswa::all(), 'bar', 'highcharts')
        ->title('Surat tidak menerima beasiswa')
        ->responsive(true)
        ->groupByMonth()
        ->elementLabel("Jumlah Surat");

        return view('surat_tidak_menerima_beasiswa.chart', ['chart' => $chart]);
    }


    public function createAdmin(){
      $result = DB::table('surat_tidak_menerima_beasiswas')
                         ->join('users','surat_tidak_menerima_beasiswas.id_user','=','users.id')
                         ->select('surat_tidak_menerima_beasiswas.*','users.*')
                         ->where('surat_tidak_menerima_beasiswas.status', '=', '0')
                         ->get();
                     //dd($result);
       return view('surat_tidak_menerima_beasiswa.createAdmin', compact('result'));
      }

      public function indexAdmin(){
      $result = DB::table('surat_tidak_menerima_beasiswas')
                        ->join('users','surat_tidak_menerima_beasiswas.id_user','=','users.id')
                        ->select('surat_tidak_menerima_beasiswas.*','users.*')
                        ->where('surat_tidak_menerima_beasiswas.status', '=', '1')
                        ->get();
                    //dd($result);
      return view('surat_tidak_menerima_beasiswa.indexAdmin', compact('result'));
      }

      public function update($id_surat_tidak_menerima_beasiswa){
      surat_tidak_menerima_beasiswa::where('id_surat_tidak_menerima_beasiswa', $id_surat_tidak_menerima_beasiswa)-> update([
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
      return redirect('/surat_tidak_menerima_beasiswa/createAdmin');
      }


      public function userProfil($id_surat_tidak_menerima_beasiswa){
      $result = DB::table('surat_tidak_menerima_beasiswas')
                        ->join('users','surat_tidak_menerima_beasiswas.id_user','=','users.id')
                        ->select('surat_tidak_menerima_beasiswas.*','users.*')
                        ->where('surat_tidak_menerima_beasiswas.id_surat_tidak_menerima_beasiswa', '=', $id_surat_tidak_menerima_beasiswa)
                        ->get();
                  //  dd($result);
      return view('surat_tidak_menerima_beasiswa.userProfil', compact('result'));
      }

}
