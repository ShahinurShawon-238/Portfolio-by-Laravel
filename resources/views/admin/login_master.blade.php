<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="shortcut icon" href="{{ asset('backendLogin/images/favicon.ico') }}" type="image/x-icon"> -->
    <title>Admin Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('backendLogin/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('backendLogin/css/style.css') }}">
</head>
<body>
<div class="main">
    @yield('login')
</div>
<!-- JS -->
<script src="{{ asset('backendLogin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backendLogin/js/main.js') }}"></script>
</body>
</html>
