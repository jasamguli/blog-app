<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}"/>
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            {{--            <li class="nav-item d-none d-sm-inline-block">--}}
            {{--                <a href="{{ route('about') }}" class="nav-link">About</a>--}}
            {{--            </li>--}}
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('blog') }}" class="nav-link">Blog</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    @method('POST')
                    <button class="btn btn-danger">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin') }}" class="brand-link">
            <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">

                    @if(auth()->user()->picture)
                        <img src="{{ auth()->user()->picture }}" class="img-circle elevation-2" alt="User Image">
                    @else
                        <img src="{{ asset('assets/img/defaultProfilePicture.png') }}" class="img-circle elevation-2"
                             alt="User Image">
                    @endif
                </div>
                <div class="info">
                    <a href="{{ route('myProfile') }}" class="d-block">{{ auth()->user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('post.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                My posts
                            </p>
                        </a>
                    </li>
                    @if(auth()->user()->admin)
                        <li class="nav-item">
                            <a href="{{ route('post.index', ['param' => 'admin']) }}" class="nav-link">
                                <i class="nav-icon fas fa-list-ol"></i>
                                <p>
                                    All posts
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('post.create') }}" class="nav-link">
                            <i class="nav-icon fas fa-plus-circle"></i>
                            <p>
                                Add a new post
                            </p>
                        </a>
                    </li>
                    @if(auth()->user()->admin)
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">

        @yield('content')

    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <a href="https://github.com/jasamguli"><b>Github</b></a>&nbsp;&nbsp;&nbsp;
            <a href="https://www.facebook.com/Guliver.41/"><b>Facebook</b></a>&nbsp;&nbsp;&nbsp;
            <a href="https://www.linkedin.com/in/nikola-londrovic-b49a9b1ba/"><b>LinkedIn</b></a>
        </div>
    </footer>

</div>
<!-- ./wrapper -->

<script src="https://cdn.tiny.cloud/1/b0hvgs89c6n3c7x9q2irixqh6jgute9b4feganu15oulkm8l/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
        toolbar_mode: 'floating',
    });
</script>

</body>
</html>
