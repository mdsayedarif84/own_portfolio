<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @include('admin.dashboard.css')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <!-- Styles -->
</head>

<body class="font-sans antialiased">

    <!-- /.navbar -->
    @include('admin.dashboard.includes.header')

    <!-- Main Sidebar Container -->
    @include('admin.dashboard.sidebar')
    <!-- Content Wrapper. Contains page content -->
    @yield('home')
    <!-- /.content-wrapper -->
    @include('admin.dashboard.includes.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    @livewireScripts
    <!-- /.control-sidebar -->
    @include('admin.dashboard.js')
</body>

</html>