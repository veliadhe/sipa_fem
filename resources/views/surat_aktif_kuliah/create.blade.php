@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('surat_aktif_kuliah.store') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Semester</label>
        <input type="text" class="form-control" name="semester" placeholder="Semester saat ini" value="{{ old('semester') }}">
      </div>
      <div class="form-group">
        <label for="">Kebutuhan</label>
        <textarea name="kebutuhan" rows="2" class="form-control" placeholder="Surat aktif digunakan untuk apa" value="{{ old('kebutuhan') }}"></textarea>
      </div>

      <div class="form-group">
        <label for="">Fotokopi KTM</label>
        <input type="file" name="fcktm" value="{{ old('fcktm') }}">
      </div>

      <div class="form-group">
        <label for="">Fotokopi SPP Terakhir</label>
        <input type="file" name="fcspp" value="{{ old('fcspp') }}">
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Buat">
      </div>
    </form>
  </div>
@endsection
