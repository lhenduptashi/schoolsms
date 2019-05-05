<!DOCTYPE html>
<html lang="en">
 @include('layouts.partials.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span>School MS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('layouts.partials.menuprofilequickinfo')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
                @include('layouts.partials.sidebarmenu')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('layouts.partials.menufooterbuttons')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
       @include('layouts.partials.topnav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
          </div>
        <!-- /page content -->

        <!-- footer content -->
         @include('layouts.partials.footer')
        <!-- /footer content -->
      </div>
    </div>
  @include('layouts.partials.script')

  </body>
</html>
