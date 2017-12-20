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
                          <th>No. </th>
                          <th>Nama </th>
                          <th>Tanggal Masuk</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <p hidden> {{ $no=1}}</p>
                        @foreach ($result as $surat_aktif_kuliah)
                        <tr>
                          <td>{{ $no++}}</td>
                          <td><a href="{{ route('surat_aktif_kuliah.userProfil', $surat_aktif_kuliah->id_surat_aktif_kuliah) }}"> {{ $surat_aktif_kuliah -> name }}</a></td>
                          <td>{{ $surat_aktif_kuliah -> created_at}}</td>
                          <td>
                            <form action="{{ route('surat_aktif_kuliahcreateAdmin.update', $surat_aktif_kuliah->id_surat_aktif_kuliah) }}" method="post" novalidate>
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <input name="status" type="hidden" value="1">
                                <input name="email" type="hidden" value="{{ $surat_aktif_kuliah->email}}">
                                <input name="subjek" type="hidden" value="Surat Aktif Kuliah Telah Selesai di Proses">
                                <input name="message" type="hidden" value="Surat Aktif Kuliah anda telah selesai diproses. Silahkan datang ke TU FEM untuk mengambil surat anda">
                                <button id="send" type="submit" class="btn btn-success">Selesai</button>
                            </form>

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
