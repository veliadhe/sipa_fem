<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/profile-photo.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            {{ Auth::user()->name }}<br>
          </p>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        {{--  <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>  --}}
            <li>
          <a href="#">
            <i class="fa fa-calendar-check-o"></i> <span>Buat Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('surat_aktif_kuliah.store')}}"><i class="fa fa-circle-o"></i> Surat Aktif Kuliah</a></li>
            <li class="active"><a href="{{ route('surat_tidak_menerima_beasiswa.store')}}"><i class="fa fa-circle-o"></i> Surat Tidak Menerima Beasiswa</a></li>
            <li class="active"><a href="{{ route('surat_rekomendasi_beasiswa.store') }}"><i class="fa fa-circle-o"></i> Surat Rekomendasi Beasiswa</a></li>
          </ul>
        </li>

        <li >
          <a href="#" class="treeview">
            <i class="fa fa-user-plus"></i> <span>Status Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Surat Aktif Kuliah</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Surat Tidak Menerima Beasiswa</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Surat Rekomendasi Beasiswa</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
