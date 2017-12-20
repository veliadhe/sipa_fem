@extends('layouts.tampilanAdmin')

@section('content1')
<!-- page content -->
        <div class="col-md-12 col-sm-12 col-xs-12" role="main" style="min-height: 4144px;">
          <div class="">
            <div class="page-title">

              <div class="title_left">
                <h3>Dokumen Surat Rekomendasi Beasiswa</h3>
              </div>
            <h2 class="pull-right"><a href="{{ route('user.tambahMahasiswa')}}"> Tambah Mahasiswa </h2>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No. </th>
                          <th>Nama Mahasiswa</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <p hidden> {{ $no=1}}</p>
                        @foreach ($result as $data)
                        <tr>
                          <td>{{ $no++}}</td>
                          <td><a href="{{ route('user.lihatMahasiswa', $data->id)}}"> {{ $data -> name }}</a></td>
                          <td>
                            <a href="{{ route('user.editMahasiswa', $data->id)}}" class="btn btn-info" href="#">Edit</a>
                            <form action="{{ route('user.deleteMahasiswa', $data->id) }}" method="post" novalidate>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit" >Hapus</button>
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
