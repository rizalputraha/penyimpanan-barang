<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- Laravel Default <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{ asset('admin/css/core.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/app.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.min.css')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('admin/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('admin/img/favicon.png') }}">
</head>
<body>
    
    @yield('content')

    <!-- Scripts -->
    <!-- Laravel Default View <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $('#tabel-barang').DataTable();
    </script>
    <script src="{{ asset('admin/js/core.min.js')}}"></script>
    <script src="{{ asset('admin/js/app.min.js')}}"></script>
    <script src="{{ asset('admin/js/script.min.js')}}"></script>
    
</body>
</html>
