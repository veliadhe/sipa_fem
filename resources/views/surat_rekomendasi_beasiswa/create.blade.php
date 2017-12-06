@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('surat_rekomendasi_beasiswa.store') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group has-feedback{{ $errors -> has('semester') ? ' has-error' : '' }}">
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

      <div class="form-group has-feedback{{ $errors -> has('fcktm') ? 'has-error' : '' }}">
        <label for="">Fotokopi KTM</label>
        <input type="file" name="fcktm" value="{{ old('fcktm') }}">
        @if ($errors->has('fcktm'))
          <span class="help-block">
            <p>{{$errors->first('fcktm')}}</p>
          </span>
        @endif
      </div>

      <div class="form-group has-feedback{{ $errors -> has('fcspp') ? 'has-error' : '' }}">
        <label for="">Fotokopi SPP</label>
        <input type="file" name="fcspp" value="{{ old('fcspp') }}">
        @if ($errors->has('fcspp'))
          <span class="help-block">
            <p>{{$errors->first('fcspp')}}</p>
          </span>
        @endif
      </div>
      <div class="form-group has-feedback{{ $errors -> has('formulir_beasiswa') ? 'has-error' : '' }}">
        <label for="">formulir beasiswa'</label>
        <input type="file" name="formulir_beasiswa" value="{{ old('formulir_beasiswa') }}">
        @if ($errors->has('formulir_beasiswa'))
          <span class="help-block">
            <p>{{$errors->first('formulir_beasiswa')}}</p>
          </span>
        @endif
      </div>
      <div class="form-group has-feedback{{ $errors -> has('beasiswa') ? 'has-error' : '' }}">
        <label for="">Beasiswa yang pernah didapat'</label>
        <input type="file" name="beasiswa" value="{{ old('beasiswa') }}">
        @if ($errors->has('beasiswa'))
          <span class="help-block">
            <p>{{$errors->first('beasiswa')}}</p>
          </span>
        @endif
      </div>
      <div class="form-group has-feedback{{ $errors -> has('surat_pernyataan_sedang_tidak_menerima_beasiswa') ? 'has-error' : '' }}">
        <label for="">surat_pernyataan_sedang_tidak_menerima_beasiswa</label>
        <input type="file" name="surat_pernyataan_sedang_tidak_menerima_beasiswa" value="{{ old('surat_pernyataan_sedang_tidak_menerima_beasiswa') }}">
        @if ($errors->has('surat_pernyataan_sedang_tidak_menerima_beasiswa'))
          <span class="help-block">
            <p>{{$errors->first('surat_pernyataan_sedang_tidak_menerima_beasiswa')}}</p>
          </span>
        @endif
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Kirim">
      </div>
    </form>
  </div>
@endsection
