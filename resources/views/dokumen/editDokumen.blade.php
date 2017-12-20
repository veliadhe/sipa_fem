@extends('layouts.tampilanAdmin')

@section('content1')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
   <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Personal Info</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            @foreach ($dokumenku as $data)
            <form class="form-horizontal form-label-left" action="{{ route('dokumen.updateDokumen', $data->id_dokumen) }}" method="post" enctype="multipart/form-data" novalidate>
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
               <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_dokumen">Nama dokumen <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="nama_dokumen" class="form-control col-md-7 col-xs-12" readonly="readonly" data-validate-length-range="6" data-validate-words="2" name="nama_dokumen" value="{{ $data->nama_dokumen }}" required="required" type="text">
                </div>
              </div>

    <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Dokumen <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="dokumen" name="dokumen" required="required" class="form-control col-md-7 col-xs-12">
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
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection
