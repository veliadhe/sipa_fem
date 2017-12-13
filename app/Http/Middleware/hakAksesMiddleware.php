<?php

namespace App\Http\Middleware;

use Closure;

class hakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $namaRule)
    {
      if(auth()->check() && !auth()->user()->punyaRule('mahasiswa')){
        return redirect('dashboardAdmin');
      }
        else {
        return redirect('beranda');
        }
    }
}
