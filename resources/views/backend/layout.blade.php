<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anasayfa</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/backend/dist/css/main.css">

    <script src="/backend/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/backend/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/backend/dist/js/demo.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.Index')}}" class="brand-link">
            <img src="/backend/dist/img/AdminLTELogo.png"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-header">MENULER</li>
                    <li class="nav-item">
                        <a href="{{route('settings.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Ayarlar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('slider.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                Slider
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('about.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>
                                Hakkkımızda
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('staff.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-people-carry"></i>
                            <p>
                                Kadro
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('blog.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-blog"></i>
                            <p>
                                Blog
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('service.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-adjust"></i>
                            <p>
                                Hizmetler
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('customer.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-cannabis"></i>
                            <p>
                                Müşteri
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('reference.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-ad"></i>
                            <p>
                                Referanslar
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">ÇIKIŞ</li>
                    <li class="nav-item">
                        <a href="{{route('admin.Logout')}}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">ÇIKIŞ</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

   @yield('content')

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.2
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@if(session()->has('success'))
    <script>alertify.success('{{session('success')}}')</script>
@endif
@if(session()->has('error'))
    <script>alertify.error('{{session('error')}}')</script>
@endif

@foreach($errors->all() as $error)
    <script>
        alertify.error('{{$error}}')
    </script>
@endforeach
<!-- jQuery -->

</body>
</html>
