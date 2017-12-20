@extends('layouts.tampilan')

@section('content')
<!-- page content -->
        <div class="col-md-12 col-sm-12 col-xs-12" role="main">
          <div class="">
              <div class="title_left">
                <h3> Silahkan Download Contoh Berkas yang harus Diunggah : </h3>
                  <div class="x_panel">
                      @foreach($result as $data)
                      <a class="btn btn-success" href="{{ asset('storage/'.$data -> dokumen) }}" download="{{ $data->dokumen}}">Contoh formulir beasiswa yang pernah diambil</a>
                      @endforeach
                      @foreach($result2 as $data)
                      <a class="btn btn-success" href="{{ asset('storage/'.$data -> dokumen) }}" download="{{ $data->dokumen}}">Contoh surat pernyataan sedang tidak menerima beasiswa</a>
                      @endforeach
                    </div>
                </div>


            <div class="page-title">
              <div class="title_left">
                <h3>Silahkan isi Form Surat Rekomendasi Beasiswa :</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lengkapi data dibawah ini</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="{{ route('surat_rekomendasi_beasiswa.store') }}" method="post" enctype="multipart/form-data" novalidate>
                      <div class="item form-group">
                        {{ csrf_field() }}
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="semester">Semester <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="semester" class="form-control col-md-7 col-xs-12" value="{{ old('semester') }}" name="semester" placeholder="Semester saat ini" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ipk">IPK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ipk" required="required" name="ipk"  value="{{ old('ipk') }}" placeholder="IPK Semester Terakhir" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sks">SKS<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="sks" required="required" name="sks"  value="{{ old('sks') }}" placeholder="SKS Semester ini" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fcktm">Fotokopi KTM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="fcktm" name="fcktm" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fcktm">Fotokopi SPP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="fcspp" name="fcspp" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="formulir_beasiswa">Formulir Beasiswa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="formulir_beasiswa" name="formulir_beasiswa" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fcktm">Beasiswa yang Pernah Didapat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="beasiswa" name="beasiswa" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fcktm">Surat Pernyataan Sedang Tidak Menerima Beasiswa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="surat_pernyataan_sedang_tidak_menerima_beasiswa" name="surat_pernyataan_sedang_tidak_menerima_beasiswa" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>





        <!-- /page content -->

@endsection
