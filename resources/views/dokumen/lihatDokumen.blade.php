@extends('layouts.tampilanAdmin')

@section('content1')
<!-- page content -->
        <div class="col-md-12 col-sm-12 col-xs-12" role="main" style="min-height: 4144px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dokumen Surat Rekomendasi Beasiswa</h3>
                <!-- <h2><a href="{{ route('dokumen.create')}}"> Tambah Dokumen </h2> -->
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No. </th>
                          <th>Nama Dokumen</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <p hidden> {{ $no=1}}</p>
                        @foreach ($result as $dokumen)
                        <tr>
                          <td>{{ $no++}}</td>
                          <td> {{ $dokumen -> nama_dokumen }}</a></td>
                          <td>
                            <a class="btn btn-info" href="{{ route('dokumen.editDokumen', $dokumen->id_dokumen) }}">Edit</a>
                            <a class="btn btn-success" href="{{ asset('storage/'.$dokumen -> dokumen) }}" download="{{ $dokumen->dokumen}}">Download</a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
