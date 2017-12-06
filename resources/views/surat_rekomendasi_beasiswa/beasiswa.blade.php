@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('surat_rekomendasi_beasiswa.beasiswa', 'id_surat_rekomendasi')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Nama Beasiswa</label>
        <input type="text" class="form-control" name="nama_beasiswa" placeholder="beasiswa yang diterima saat ini" value="{{ old('semester') }}">
      </div>
      <div class="form-group">
        <label for="">Periode</label>
        <textarea name="periode" rows="2" class="form-control" placeholder="tahun beasiswa diberikan" value="{{ old('periode') }}"></textarea>
      </div>
      <div class="form-group">
        <label for="">Dana Perbulan</label>
        <textarea name="dana_perbulan" rows="2" class="form-control" placeholder="Dana beasiswa perbulan" value="{{ old('dana_perbulan') }}"></textarea>
      </div>
      <div class="form-group">
        <label for="">Status</label>
        <textarea name="status" rows="2" class="form-control" placeholder="status beasiswa" value="{{ old('status') }}"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Kirim">
      </div>
    </form>
  </div>
@endsection
