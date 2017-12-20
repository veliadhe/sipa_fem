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
            @foreach ($result as $data)
            <form class="form-horizontal form-label-left" novalidate>

               <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" class="form-control col-md-7 col-xs-12" readonly="readonly" data-validate-length-range="6" data-validate-words="2" name="name" value="{{ $data->name }}" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">NIM <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="number" name="number" readonly="readonly" required="required" data-validate-minmax="10,100" value="{{ $data->nrp }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Tempat Lahir <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="url" id="website" name="website" readonly="readonly" required="required" placeholder="www.website.com" value="{{ $data->tempat_lahir }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Tanggal Lahir <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="occupation" type="text" name="occupation" readonly="readonly" data-validate-length-range="5,20" value="{{ $data->tanggal_lahir }}" class="optional form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Departemen <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="tel" id="telephone" name="phone" required="required" readonly="readonly" data-validate-length-range="8,20" value="{{ $data->departemen }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Alamat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="tel" id="telephone" name="phone" required="required" readonly="readonly" data-validate-length-range="8,20" value="{{ $data->alamat }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
    <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Nomor Handphone <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="tel" id="telephone" name="phone" required="required" readonly="readonly" data-validate-length-range="8,20" value="{{ $data->no_hp }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
    <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Semester <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="tel" id="telephone" name="phone" required="required" readonly="readonly" data-validate-length-range="8,20" value="{{ $data->semester }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
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
