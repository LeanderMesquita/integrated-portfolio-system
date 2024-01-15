<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf_token" content="{{ csrf_token() }}">

    <title>{{ config('constants.app.name') }} - Área Administrativa</title>
    <meta name="author" content="IPLANFOR - Instituto de Planejamento de Fortaleza">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/6c4b1f134f.js" crossorigin="anonymous"></script>
    <!-- -------------- CSS - theme -------------- -->
    <link type="text/css" href="{{ asset('/assets/css/theme.admin.css') }}" rel="stylesheet" media="all">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link type="text/css" href="{{ asset('/assets/css/forms.admin.css') }}" rel="stylesheet" media="all">


    <!-- Icon -->
    <link rel="icon" href="{{ asset('/assets/img/Escudo_IPLA_Col.png') }}" />

    <!-- Styles -->
    <link href="{{ asset('/assets/css/app.custom.css') }}" rel="stylesheet" media="all">

</head>

<body class="utility-page sb-l-c sb-r-c">

    <!-- -------------- Body Wrap  -------------- -->
    <div id="main" class="animated fadeIn">

        <!-- -------------- Main Wrapper -------------- -->
        <section id="content_wrapper">

            <!-- -------------- Content -------------- -->
            <section id="content">

                @yield('content')

            </section>
            <!-- -------------- /Content -------------- -->

        </section>
        <!-- -------------- /Main Wrapper -------------- -->

    </div>
    <!-- -------------- /Body Wrap  -------------- -->

    <div class="hide" id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">@lang('app.top.login')</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('app.profile.logout')
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- -------------- Scripts -------------- -->

    <!-- -------------- jQuery -------------- -->
    <script src="{{ asset('/assets/vendor/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/app.custom.js') }}"></script>
    <!-- -------------- /Scripts -------------- -->

</body>

</html>