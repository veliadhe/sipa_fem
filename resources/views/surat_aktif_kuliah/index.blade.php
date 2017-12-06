@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            @foreach ($surat_aktif_kuliahs as $surat_aktif_kuliah)
            <div class="panel panel-default">
                <div class="panel-heading">Surat Aktif Kuliah</div>

                <div class="panel-body">
                    <p> tanggal dibuat </p>
                    <p>{{ $surat_aktif_kuliah -> created_at}}</p>
                </div>
                <div class="panel-body">
                    <p> tanggal surat jadi </p>
                    <p>{{ $surat_aktif_kuliah -> tanggal_jadi}}</p>
                </div>

            </div>
            @endforeach
          </div>
      </div>
  </div>
@endsection
