<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My App')</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{ asset('template/vendors/sweetalert-2.11.1.7/dist/sweetalert2.min.css')}}">
    <script src="{{ asset('template/vendors/sweetalert-2.11.1.7/dist/sweetalert2.min.js')}}"></script>
</head>

<body>
    @yield('content')
    
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('template/js/off-canvas.js')}}"></script>
    <script src="{{ asset('template/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('template/js/template.js')}}"></script>
    <script src="{{ asset('template/js/settings.js')}}"></script>
    <script src="{{ asset('template/js/todolist.js')}}"></script>
    <!-- endinject -->
</body>

</html>