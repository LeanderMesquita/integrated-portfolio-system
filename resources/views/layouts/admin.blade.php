<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootsnav.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}" />
<!-- Bootstrap CSS-->
    <link href="{{ asset('/assets/vendor/bootstrap-5.3.2/css/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <script src="https://kit.fontawesome.com/6c4b1f134f.js" crossorigin="anonymous"></script>
<!-- Icon -->
    <link rel="icon" href="{{ asset('/assets/img/Escudo_IPLA_Col.png') }}" />
    @yield('page-css')
    @yield('title')
</head>

<body id="body-admin">


@yield('header-admin')
@yield('content-admin')

@yield('footer')


</body>
<!-- javascript -->
<script src="{{ asset('/assets/vendor/bootstrap-5.3.2/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootsnav.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.nav.js') }}"></script>
<script src="{{ asset('/assets/js/theme-vendors.min.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/multiselect-dropdown.js') }}"></script>
<!-- setting -->
<script src="{{ asset('/assets/js/main.js') }}"></script>


</hmtl>