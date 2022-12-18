<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.style')
</head>

<body>
    <header>
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Sidebar -->

        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    @yield('content')
    <script src="{{ asset('js/jquery-3-5-1.js') }}"></script>
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('backend/js/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('backend/js/admin.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('scripts')
</body>

</html>
