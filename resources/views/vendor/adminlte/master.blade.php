<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'AdminLTE 2'))
    @yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @if(config('adminlte.plugins.morris'))
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/morris.js/morris.css')}}">
    @endif
    @if(config('adminlte.plugins.jvectormap'))
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/jvectormap/jquery-jvectormap.css')}}">
    @endif
    @if(config('adminlte.plugins.datepicker'))
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    @endif
    @if(config('adminlte.plugins.daterangepicker'))
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/bootstrap-daterangepicker/daterangepicker.css')}}">
    @endif
    @if(config('adminlte.plugins.bootstrapwysihtml5'))
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    @endif
    @if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/select2/dist/css/select2.min.css')}}">
    @endif
    @if(config('adminlte.plugins.datatables'))
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    @endif

    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition @yield('body_class')">

    @yield('body')
    <!-- jQuery 3 -->
    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('vendor/adminlte/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('vendor/adminlte/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    @if(config('adminlte.plugins.morris'))
    <!-- Morris.js charts -->
    <script src="{{ asset('vendor/adminlte/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/vendor/morris.js/morris.min.js') }}"></script>
    @endif
    @if(config('adminlte.plugins.sparkline'))
    <!-- Sparkline -->
    <script src="{{ asset('vendor/adminlte/vendor/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    @endif
    @if(config('adminlte.plugins.jvectormap'))
    <!-- jvectormap -->
    <script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    @endif
    @if(config('adminlte.plugins.jqueryknobchart'))
    <!-- jQuery Knob Chart -->
    <script src="{{asset('vendor/adminlte/vendor/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    @endif
    @if(config('adminlte.plugins.daterangepicker'))
    <!-- daterangepicker -->
    <script src="{{asset('vendor/adminlte/vendor/moment/min/locales.min.js')}}"></script>
    <script src="{{asset('vendor/adminlte/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    @endif
    @if(config('adminlte.plugins.datepicker'))
    <!-- datepicker -->
    <script src="{{asset('vendor/adminlte/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    @endif
    @if(config('adminlte.plugins.bootstrapwysihtml5'))
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('vendor/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    @endif
    <script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    @if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
    <script src="{{asset('vendor/adminlte/vendor/select2/dist/js/select2.full.min.js')}}"></script>
    @endif
    @if(config('adminlte.plugins.datatables'))
    <!-- DataTables -->
    <script src="{{asset('vendor/adminlte/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/adminlte/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    @endif
    @if(config('adminlte.plugins.chartjs'))
    <!-- ChartJS -->
    <script src="{{asset('vendor/adminlte/vendor/chart.js/Chart.min.js')}}"></script>
    @endif
    <!-- AdminLTE App -->
    <script src="{{asset('vendor/adminlte/dist/js/adminlte.min.js')}}"></script>
    @yield('adminlte_js')

</body>
</html>
