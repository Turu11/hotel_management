<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Admin-Pro lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Admin-Pro lite design, Admin-Pro lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Admin-Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin-Pro Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminpro-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/pages/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/colors/default-dark.css')}}" id="theme" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <h3><p class="loader__label"> Tech Admin Table</p></h3>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- Header хэсэг эхлэх -->
       @include('admin-ui.layout.header')
        <!-- Header хэсэг дуусах -->
        <!-- Left Sidebar start -->
       @include('admin-ui.layout.sidebar')
        <!-- Left Sidebar end -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Гарчиг хэсэг эхлэх -->
               @yield('top-section')
                <!-- Гарчиг хэсэг дуусах -->
                <!-- Start Page Content -->
                @yield('body-section')
                <!-- ============================================================== -->
                <!-- End PAge Content -->              
            </div>
            @include('admin-ui.layout.footer')
        </div>
    </div>
    <script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="{{asset('admin/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{asset('admin/assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{asset('admin/js/dashboard.js"></script>
</body>

</html>