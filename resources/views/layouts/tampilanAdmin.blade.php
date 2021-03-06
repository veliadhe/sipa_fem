<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('assets/dist/img/ipb-fem.png') }}">
    <title>SIPA FEM </title>

    <!-- Bootstrap -->
    <link href="{{ url('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ url('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ url('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{ url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
   <link href="{{ url('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
   <!-- bootstrap-datetimepicker -->
   <link href="{{ url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
   <!-- Ion.RangeSlider -->
   <link href="{{ url('vendors/normalize-css/normalize.css') }}" rel="stylesheet">
   <link href="{{ url('vendors/ion.rangeSlider/css/ion.rangeSlider.css') }}" rel="stylesheet">
   <link href="{{ url('vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
   <!-- Bootstrap Colorpicker -->
   <link href="{{ url('vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('build/css/custom.min.css') }}" rel="stylesheet">
    {!! Charts::assets() !!}
  </head>

  <!-- Authentication Links -->
  @if (Auth::guest())
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
  @else
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboardAdmin" class="site_title"><i class="fa fa-graduation-cap"></i> <span>SIPA FEM</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ url('images/akun.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>  {{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('dashboardAdmin') }}"><i class="fa fa-home"></i> Home <span class="label label-success pull-right"></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Surat Masuk <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('surat_aktif_kuliah.createAdmin')}}">Surat Aktif Kuliah</a></li>
                      <li><a href="{{ route('surat_tidak_menerima_beasiswa.createAdmin')}}">Surat Tidak Menerima Beasiswa</a></li>
                      <li><a href="{{ route('surat_rekomendasi_beasiswa.createAdmin')}}">Surat Rekomendasi Beasiswa</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-folder"></i> Surat Keluar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('surat_aktif_kuliah.indexAdmin')}}">Surat Aktif Kuliah</a></li>
                      <li><a href="{{ route('surat_tidak_menerima_beasiswa.indexAdmin')}}">Surat Tidak Menerima Beasiswa</a></li>
                      <li><a href="{{ route('surat_rekomendasi_beasiswa.indexAdmin')}}">Surat Rekomendasi Beasiswa</a></li>
                      <!-- <li><a href="icons.html">Surat Offline</a></li> -->
                    </ul>
                  </li>
                  <li><a href="{{ route('dokumen.lihatDokumen') }}"><i class="fa fa-external-link"></i> Arsip Rekomen Beasiswa <span class="label label-success pull-right"></span></a>
                  </li>
                  <li><a href="{{ route('user.daftarMahasiswa') }}"><i class="fa fa-male"></i>Mahasiswa <span class="label label-success pull-right"></span></a>
                  </li>
                  </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ url('images/akun.png') }}" alt="">  {{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                  -->
                    <li><a href="{{ route('logout')}}"
                      onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                             </form>
                    </li>
                  </ul>
                </li>
<!--
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @endif
          <!-- top tiles -->
          @yield('content1')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SIPA FEM TEAM | Template by Bootstrap
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ url('vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ url('vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ url('vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ url('vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ url('vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ url('vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ url('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ url('vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ url('vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ url('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- Datatables -->
       <script src="{{ url('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
       <script src="{{ url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
       <script src="{{ url('vendors/jszip/dist/jszip.min.js') }}"></script>
       <script src="{{ url('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
       <script src="{{ url('vendors/pdfmake/build/vfs_fonts.js') }}"></script>

  <!-- bootstrap-daterangepicker -->
   <script src="{{ url('vendors/moment/min/moment.min.js') }}"></script>
   <script src="{{ url('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
   <!-- bootstrap-datetimepicker -->
   <script src="{{ url('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
   <!-- Ion.RangeSlider -->
   <script src="{{ url('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
   <!-- Bootstrap Colorpicker -->
   <script src="{{ url('vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
   <!-- jquery.inputmask -->
   <script src="{{ url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
   <!-- jQuery Knob -->
   <script src="{{ url('vendors/jquery-knob/dist/jquery.knob.min.js') }}"></script>
   <!-- Cropper -->
   <script src="{{ url('vendors/cropper/dist/cropper.min.js') }}"></script>


    <!-- Custom Theme Scripts -->
    <script src="{{ url('build/js/custom.min.js') }}"></script>

    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>

  </body>
</html>
