@extends('layouts.tampilan')

@section('content')
<!-- page content -->
        <div class="right_col" role="main" style="min-height: 4144px;">
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
                          <th>Nama Dokumen</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dokumens as $dokumen)
                        <tr>
                          <td>{{ $dokumen -> nama_dokumen}}</td>
                          <td>
                            <a href="storage/dokumen/{{ $dokumen -> dokumen}}" download="{{ $dokumen->dokumen}}">
                            <button type="button" class="btn btn-primary"> Download </button>
                            </a>
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
