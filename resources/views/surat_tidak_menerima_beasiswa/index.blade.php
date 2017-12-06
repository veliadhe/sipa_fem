@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            @foreach ($surat_tidak_menerima_beasiswas as $surat_tidak_menerima_beasiswa)
            <div class="panel panel-default">
                <div class="panel-heading">Surat Tidak Menerima Beasiswa</div>

                <div class="panel-body">
                    <p> tanggal dibuat </p>
                    <p>{{ $surat_tidak_menerima_beasiswa -> created_at}}</p>
                </div>
                <div class="panel-body">
                    <p> tanggal surat jadi </p>
                    <p>{{ $surat_tidak_menerima_beasiswa -> tanggal_jadi}}</p>
                </div>

            </div>
            @endforeach
          </div>
      </div>
  </div>
@endsection
