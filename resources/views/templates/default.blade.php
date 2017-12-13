<!DOCTYPE html>
<html lang="en">

@include('templates.partials.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SIPA FEM</span></a>
            </div>

            <div class="clearfix"></div>

            @include('templates.partials.menuprofile')

            <br />

            @include('templates.partials.sidebar')

            @include('templates.partials.menufooter')

          </div>
        </div>

        @include('templates.partials.topnavigation')

        <!-- page content -->
        <div class="right_col" role="main">
          </div>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SIPA FEM Team
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

@include('templates.partials.script')
	
  </body>
</html>

