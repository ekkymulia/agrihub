<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Nest Dashboard</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets-dashboard/imgs/theme/favicon.svg')}}" />
        <!-- Template CSS -->
        <link href="{{asset('assets-dashboard/css/main.css?v=1.1')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="screen-overlay"></div>
        @include('admin.templating.navbar')
        <main class="main-wrap">
            @include('admin.templating.header')
            @yield('content')
            @include('admin.templating.footer')
            <!-- content-main end// -->
        </main>
        <script src="{{asset('assets-dashboard/js/vendors/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets-dashboard/js/vendors/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets-dashboard/js/vendors/select2.min.js')}}"></script>
        <script src="{{asset('assets-dashboard/js/vendors/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('assets-dashboard/js/vendors/jquery.fullscreen.min.js')}}"></script>
        <script src="{{asset('assets-dashboard/js/vendors/chart.js')}}"></script>
        <!-- Main Script -->
        <script src="{{asset('assets-dashboard/js/main.js?v=1.1')}}" type="text/javascript"></script>
        <script src="{{asset('assets-dashboard/js/custom-chart.js')}}" type="text/javascript"></script>
    </body>
</html>
