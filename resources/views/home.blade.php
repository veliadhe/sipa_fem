@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="beranda"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li class="active">Beranda</li>
</ol>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  HALO USER!
                    You are logged in!
                    <li><a href="{{ route('surat_aktif_kuliah.create') }}">Buat Surat Aktif Kuliah</a></li>
                    <li><a href="{{ route('surat_tidak_menerima_beasiswa.create') }}">Buat Surat Tidak Menerima Beasiswa</a></li>
                    <li><a href="{{ route('surat_rekomendasi_beasiswa.create') }}">Buat Surat Rekomendasi Beasiswa</a></li>
                    <li><a href="{{ route('surat_aktif_kuliah.index') }}">Status surat aktif kuliah</a></li>
                    <li><a href="{{ route('surat_tidak_menerima_beasiswa.index') }}">Status surat tidak menerima beasiswa</a></li>
                    <li><a href="{{ route('surat_rekomendasi_beasiswa.index') }}">Status surat rekomendasi beasiswa</a></li>
                    <li><a href="{{ route('surat_aktif_kuliah.chart') }}">Grafik Surat aktif kuliah</a></li>
                    <li><a href="{{ route('surat_tidak_menerima_beasiswa.chart') }}">Grafik Surat Tidak Menerima Beasiswa</a></li>
                    <li><a href="{{ route('surat_rekomendasi_beasiswa.chart') }}">Grafik Surat Rekomendasi Beasiswa</a></li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
