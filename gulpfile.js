var elixir = require("laravel-elixir");

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    
    // jQuery
    mix.copy("resources/assets/gentelella/vendors/jquery/dist/jquery.min.js", "public/js//jquery/jquery.min.js");

    // Bootstrap
    mix.copy("resources/assets/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js", "public/js/bootstrap/bootstrap.min.js");

    // FastClick
    mix.copy("resources/assets/gentelella/vendors/fastclick/lib/fastclick.js", "public/js/fastclick/fastclick.js");

    // NProgress
    mix.copy("resources/assets/gentelella/vendors/nprogress/nprogress.js", "public/js/nprogress/nprogress.js");

    // Chart.js
    mix.copy("resources/assets/gentelella/vendors/Chart.js/dist/Chart.min.js", "public/js/Chart.js/Chart.min.js");

    // gauge.js
    mix.copy("resources/assets/gentelella/vendors/gauge.js/dist/gauge.min.js", "public/js/gauge.js/gauge.min.js");

    //bootstrap-progressbar
    mix.copy("resources/assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js", "public/js/bootstrap-progressbar/bootstrap-progressbar.min.js");

    // iCheck
    mix.copy("resources/assets/gentelella/vendors/iCheck/icheck.min.js", "public/js/iCheck/icheck.min.js");

    //Skycons
    mix.copy("resources/assets/gentelella/vendors/skycons/skycons.js", "public/js/skycons/skycons.js");

    // Flot 
    mix.copy("resources/assets/gentelella/vendors/Flot/jquery.flot.js", "public/js/Flot/jquery.flot.js");
    mix.copy("resources/assets/gentelella/vendors/Flot/jquery.flot.pie.js", "public/js/Flot/jquery.flot.pie.js");
    mix.copy("resources/assets/gentelella/vendors/Flot/jquery.flot.time.js", "public/js/Flot/jquery.flot.time.js");
    mix.copy("resources/assets/gentelella/vendors/Flot/jquery.flot.stack.js", "public/js/Flot/jquery.flot.stack.js");
    mix.copy("resources/assets/gentelella/vendors/Flot/jquery.flot.resize.js", "public/js/Flot/jquery.flot.resize.js");

    // Flot plugins
    mix.copy("resources/assets/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js", "public/js/flot.orderbars/jquery.flot.orderBars.js");
    mix.copy("resources/assets/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js", "public/js/flot-spline/jquery.flot.spline.min.js");
    mix.copy("resources/assets/gentelella/vendors/flot.curvedlines/curvedLines.js", "public/js/flot.curvedlines/curvedLines.js");

    // DateJS
    mix.copy("resources/assets/gentelella/vendors/DateJS/build/date.js", "public/js/DateJS/build/date.js");

    // JQVMap
    mix.copy("resources/assets/gentelella/vendors/jqvmap/dist/jquery.vmap.js", "public/js/jqvmap/jquery.vmap.js");
    mix.copy("resources/assets/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js", "public/js/maps/jquery.vmap.world.js");
     mix.copy("resources/assets/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js", "public/js/examples/jquery.vmap.sampledata.js");

    // bootstrap-daterangepicker
    mix.copy("resources/assets/gentelella/vendors/moment/min/moment.min.js", "public/js/moment/min/moment.min.js");
    mix.copy("resources/assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js", "public/js/bootstrap-daterangepicker/daterangepicker.js");


    



    // CSS
    mix.copy("resources/assets/gentelella/documentation/fonts/fonts/fontawesome-webfont.woff", "public/css/font-awesome/fonts/fontawesome-webfont.woff");
    // <!-- Bootstrap -->
    mix.copy("resources/assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css", "public/css/bootstrap/dist/css/bootstrap.min.css");
    
    // <!-- Font Awesome -->
    mix.copy("resources/assets/gentelella/vendors/font-awesome/css/font-awesome.min.css", "public/css/font-awesome/css/font-awesome.min.css");
    // <!-- NProgress -->
    mix.copy("resources/assets/gentelella/vendors/nprogress/nprogress.css", "public/css/nprogress/nprogress.css");
    // ate aqui  <!-- iCheck -->
    mix.copy("resources/assets/gentelella/vendors/iCheck/skins/flat/green.css", "public/css/iCheck/skins/flat/green.css");
    
    // <!-- bootstrap-progressbar -->
    mix.copy("resources/assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css", "public/css/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css");
    // <!-- JQVMap -->
    mix.copy("resources/assets/gentelella/vendors/jqvmap/dist/jqvmap.min.css", "public/css/jqvmap/dist/jqvmap.min.css");
    // <!-- bootstrap-daterangepicker -->
    mix.copy("resources/assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css", "public/css/bootstrap-daterangepicker/daterangepicker.css");
});