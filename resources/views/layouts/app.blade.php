<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="https://portfolio.iplanfor.fortaleza.ce.gov.br/">
    <meta property="og:title" content="Portfólio DISIN - Projetos">
    <meta property="og:site_name" content="Portfólio DISIN - Projetos">
    <meta property="og:description" content="Desenvolvido pelo Instituto de Planejamento de Fortaleza (IPLANFOR), O portfólio apresenta as informações sobre os demais projetos desenvolvidos pela Diretoria de Sistema de Informação (DISIN).">
    <meta property="og:image" content="https://portfolio.iplanfor.fortaleza.ce.gov.br/assets/img/Escudo_IPLA_Col.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="250" />
<!-- css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootsnav.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/timeline.css') }}" />
<!-- Bootstrap CSS-->
    <link href="{{ asset('/assets/vendor/bootstrap-5.3.2/css/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <script src="https://kit.fontawesome.com/6c4b1f134f.js" crossorigin="anonymous"></script>
<!-- Icon -->
    <link rel="icon" href="{{ asset('/assets/img/Escudo_IPLA_Col.png') }}" />
    @yield('page-css')
    @yield('title')
</head>

<body class="bg-graylight">


@yield('header')

@yield('content')
@yield('footer')


</body>
<!-- javascript -->
<script src="{{ asset('/assets/vendor/bootstrap-5.3.2/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootsnav.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.nav.js') }}"></script>
<script src="{{ asset('/assets/js/theme-vendors.min.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/timeline.js') }}"></script>
<!-- setting -->
<script src="{{ asset('/assets/js/main.js') }}"></script>


</hmtl>