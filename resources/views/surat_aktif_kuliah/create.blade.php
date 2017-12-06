@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('surat_aktif_kuliah.store') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group has-feedback{{ $errors -> has('semester') ? ' has-error' : '' }}">
        <label for="">Semester</label>
        <input type="text" class="form-control" name="semester" placeholder="Semester saat ini" value="{{ old('semester') }}">
        @if ($errors->has('semester'))
          <span class="help-block">
            <p>{{$errors->first('semester')}}</p>
          </span>
        @endif
      </div>
      <div class="form-group has-feedback{{ $errors -> has('kebutuhan') ? 'has-error' : '' }}">
        <label for="">Kebutuhan</label>
        <textarea name="kebutuhan" rows="2" class="form-control" placeholder="Surat aktif digunakan untuk apa" value="{{ old('kebutuhan') }}"></textarea>
        @if ($errors->has('kebutuhan'))
          <span class="help-block">
            <p>{{$errors->first('kebutuhan')}}</p>
          </span>
        @endif
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
        <label for="">Fotokopi SPP Terakhir</label>
        <input type="file" name="fcspp" value="{{ old('fcspp') }}">
        @if ($errors->has('fcspp'))
          <span class="help-block">
            <p>{{$errors->first('fcspp')}}</p>
          </span>
        @endif
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Buat">
      </div>
    </form>
  </div>
@endsection
