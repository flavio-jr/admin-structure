
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    
    <!-- Bootstrap -->
    <link href="./css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./css/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./css/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="./css/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./css/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="./css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./css/app.css" rel="stylesheet">
    @yield('stylesheets')
 </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="img/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->username}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            @include('menu')

          </div>
        </div>
        @include('sidebar')
        <!--content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!--/content -->

        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        
      </div>
    </div>
    @yield('scripts')
    <!-- jQuery -->
    <script src="./js/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./js/bootstrap/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="./js/fastclick/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./js/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="./js/Chart.js/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="./js/gauge.js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="./js/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="./js/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="./js/Flot/jquery.flot.js"></script>
    <script src="./js/Flot/jquery.flot.pie.js"></script>
    <script src="./js/Flot/jquery.flot.time.js"></script>
    <script src="./js/Flot/jquery.flot.stack.js"></script>
    <script src="./js/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="./js/flot.orderbars/jquery.flot.orderBars.js"></script>
    <script src="./js/flot-spline/jquery.flot.spline.min.js"></script>
    <script src="./js/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="./js/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="./js/jqvmap/jquery.vmap.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="./js/moment/min/moment.min.js"></script>
    <script src="./js/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="./js/custom.min.js"></script>

  </body>
</html>
