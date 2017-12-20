@extends('layouts.tampilanAdmin')

@section('content1')
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3>Aktifitas Persuratan Akademik FEM IPB</h3>
                  </div>
                  <!-- <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div> -->


                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class=""> {!! $chart->render() !!}</div>
                    </div>
                  </div>
                </div>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>

@endsection
