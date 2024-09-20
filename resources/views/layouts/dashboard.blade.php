<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'my app')</title>

    <!-- plugins:css -->

    <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('template/vendors/sweetalert-2.11.1.7/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/fontawesome-free-6.2.0-web/css/all.min.css') }}">
    <script src="{{ asset('template/vendors/sweetalert-2.11.1.7/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-3.6.0.min.js') }}"></script>
    <style>
        .swal2-modal .swal2-icon,
        .swal2-modal {
            margin-top: 42px !important;
        }

        .swal2-title {
            padding-top: 0px !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-0" href="#"><img src="{{ asset('assets/asdplogo.png')}}"
                        class="mr-2" alt="logo" />
                    <p class="font-weight-light small-text mb-0 text-muted">PT ASDP Indonesia Ferry (Persero)</p>
                </a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('assets/asdplogo.png')}}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <div class="d-flex align-items-center" style="gap: 15px;">
                                <img src="{{ asset('assets/asdplogo.png')}}" alt="profile" />
                                <span>
                                    <h6 class="my-1">User</h6>
                                    <h6 style="font-size: 11px;" class="d-block text-muted mb-0">Role</h6>
                                </span>
                            </div>
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="dropdown-menu dropdown-menu-right navbar-dropdown"aria-labelledby="profileDropdown">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="ti-home menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">Penempatan</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="/penempatan/create">Input Data</a> </li>
                                <li class="nav-item"><a class="nav-link" href="/penempatan">Lihat Data</a> </li>
                                <li class="nav-item"><a class="nav-link" href="#">Lihat Data Utuh</a> </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grif-margin">
                            @yield('content')
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024.
                            All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Made
                            with <i class="ti-heart text-danger ml-1"></i> IT Ops</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>



<script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
{{-- <script src="{{ asset('template/vendors/typeahead.js') }}"></script> --}}
<script src="{{ asset('template/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('template/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('template/js/dataTables.select.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('template/js/off-canvas.js') }}"></script>
<script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('template/js/template.js') }}"></script>
<script src="{{ asset('template/js/settings.js') }}"></script>
<script src="{{ asset('template/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('template/js/file-upload.js') }}"></script>
<script src="{{ asset('template/js/typeahead.js') }}"></script>
<script src="{{ asset('template/js/select2.js') }}"></script>

</html>