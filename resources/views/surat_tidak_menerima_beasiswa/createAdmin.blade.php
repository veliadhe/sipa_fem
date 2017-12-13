@extends('layouts.tampilanAdmin')

@section('content1')

@extends('layouts.tampilanAdmin')

@section('content1')
<!-- page content -->
        <div class="col-md-12 col-sm-12 col-xs-12" role="main" style="min-height: 4144px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Status Surat Aktif Kuliah</h3>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nama </th>
                          <th>Tanggal Masuk</th>
                          <th>Tanggal Jadi</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($result as $surat_tidak_menerima_beasiswa)
                        <tr>
                          <td>{{ $surat_tidak_menerima_beasiswa -> name}}</td>
                          <td>{{ $surat_tidak_menerima_beasiswa -> created_at}}</td>
                          <td>{{ $surat_tidak_menerima_beasiswa -> tanggal_jadi}}</td>
                          <td>Edinburgh</td>
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
