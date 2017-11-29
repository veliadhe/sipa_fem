@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('surat_rekomendasi_beasiswa.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Semester</label>
        <input type="text" class="form-control" name="semester" placeholder="Semester saat ini" value="{{ old('semester') }}">
      </div>
      <div class="form-group">
        <label for="">IPK</label>
        <input type="text" class="form-control" name="ipk" placeholder="jumlah IPK" value="{{ old('ipk') }}">
      </div>

      <div class="form-group">
        <label for="">SKS</label>
        <input type="text" class="form-control" name="sks" placeholder="SKS semester ini" value="{{ old('sks') }}">
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Selanjutnya">
      </div>
    </form>
  </div>
@endsection
