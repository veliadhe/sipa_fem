 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    $this->middleware('rule:admin');
  }

  protected $redirectTo = '/cobalagi';
    public function delete(){
      return 'ini halaman delete admin';
    }

    public function update(){
      return 'ini halaman update admin';
    }
    
    public function cobalagi(){
      return view('cobalagi');
    }
}
