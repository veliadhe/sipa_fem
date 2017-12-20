@extends('layouts.tampilanAdmin')

@section('content1')
<!-- page content -->
        <div class="col-md-12 col-sm-12 col-xs-12" role="main" style="min-height: 4144px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Status Surat Rekomendasi Beasiswa</h3>
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
                        @foreach ($result as $surat_rekomendasi_beasiswa)
                        <tr>
                          <td>{{ $no++}}</td>
                          <td><a href="{{ route('surat_rekomendasi_beasiswa.userProfil', $surat_rekomendasi_beasiswa->id_surat_rekomendasi_beasiswa) }}"> {{ $surat_rekomendasi_beasiswa -> name }}</a></td>
                          <td>{{ $surat_rekomendasi_beasiswa -> created_at}}</td>
                          <td>
                            <form action="{{ route('surat_rekomendasi_beasiswacreateAdmin.update', $surat_rekomendasi_beasiswa->id_surat_rekomendasi_beasiswa) }}" method="post" novalidate>
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <input name="status" type="hidden" value="1">
                                <input name="email" type="hidden" value="{{ $surat_rekomendasi_beasiswa->email}}">
                                <input name="subjek" type="hidden" value="Surat Rekomendasi Beasiswa Telah Selesai di Proses">
                                <input name="message" type="hidden" value="Surat Rekomendasi Beasiswa anda telah selesai diproses. Silahkan datang ke TU FEM untuk mengambil surat anda">
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
