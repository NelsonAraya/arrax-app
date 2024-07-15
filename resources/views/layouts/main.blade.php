<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu-nav.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>       
    @include('layouts.nav')
    <div class="container-fluid">
            @include('layouts.errors')
            @include('layouts.messages')
            @yield('content')
    </div>
    <footer class="footer">
      <div class="container-fluid">
            <p class="text-muted">Copyright © 2024 | Todos los derechos reservados | Desarrollado por 
                <a href="mailto:nelson.araya@cormudesi.cl">Informatica Cormudesi</a> | Arrax System
            </p>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/script-nav.js') }}"></script>
    @yield('js')
</body>
</html>