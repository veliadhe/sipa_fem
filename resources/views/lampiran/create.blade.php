@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('lampiran.store', $post) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Fotokopi KTM</label>
        <input type="file" name="fotokopi_ktm" value="{{ old('fotokopi_ktm') }}">
      </div>
      <div class="form-group">
        <label for="">Fotokopi SPP</label>
        <input type="file" name="fotokopi_spp" value="{{ old('fotokopi_spp') }}">
      </div>
      <div class="form-group">
        <label for="">Formulir Beasiswa</label>
        <input type="file" name="formulir_beasiswa" value="{{ old('formulir_beasiswa') }}">
      </div>
      <div class="form-group">
        <label for="">Surat Pernyataan Sedang Tidak Menerima Beasiswa</label>
        <input type="file" name="surat_pernyataan_sedang_tidak_menerima_beasiswa" value="{{ old('surat_pernyataan_sedang_tidak_menerima_beasiswa') }}">
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Kirim">
      </div>
    </form>
  </div>
@endsection
