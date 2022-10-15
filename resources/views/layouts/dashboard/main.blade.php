<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>AdminLTE 3 | Blank Page</title>

        <!-- Google Font: Source Sans Pro -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="/asset/plugins/fontawesome-free/css/all.min.css"
        />
        <!-- Theme style -->
        <link rel="stylesheet" href="/asset/dist/css/adminlte.min.css" />
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <nav
                class="main-header navbar navbar-expand navbar-white navbar-light"
            >
                <!-- Left navbar links -->

                @include('layouts.dashboard.navbar-left')
                <!-- Right navbar links -->

                @include('layouts.dashboard.navbar-right')
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->

            @include('layouts.dashboard.aside')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">@yield('content')</div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.2.0
                </div>
                <strong
                    >Copyright &copy; 2014-2021
                    <a href="https://adminlte.io">AdminLTE.io</a>.</strong
                >
                All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="/asset/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/asset/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/asset/dist/js/demo.js"></script>
    </body>
</html>
