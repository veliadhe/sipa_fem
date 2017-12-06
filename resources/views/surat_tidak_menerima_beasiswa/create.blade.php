@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('surat_tidak_menerima_beasiswa.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Semester</label>
        <input type="text" class="form-control" name="semester" placeholder="Semester saat ini" value="{{ old('semester') }}">
        @if ($errors->has('semester'))
          <span class="help-block">
            <p>{{$errors->first('semester')}}</p>
          </span>
        @endif
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Buat">
      </div>
    </form>
  </div>
@endsection
