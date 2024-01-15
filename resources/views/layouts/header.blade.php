<header  id="header" class="no-sticky position-absolute w-100">
<!-- navbar -->

    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark background-transparent nav-box-width white-link navbar-expand-lg menu-center on no-full py-2">
        <div id="container-header" class="container-fluid nav-header-container">
            <!-- start logo -->
            <div class="container-logo col-auto col-lg-3 ps-0">
                <a href="/home" title="IPLANFOR" class="logo">
                    <img src="{{asset('/assets/img/images/logos/iplanfor/Logo_CONJUNTA_Full_Hor_Col_Branco.svg')}}" data-at2x="{{asset('/assets/img/images/logos/iplanfor/Logo_CONJUNTA_Full_Hor_Col_Branco.svg')}}" alt="Pofo" class="logo-light default">
                </a>
            </div>
            <!-- end logo -->
            <div class="col accordion-menu pr-0 pr-md-3">
                <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1" aria-expanded="false">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse justify-content-end collapse" id="navbar-collapse-toggle-1" style="">
                    <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal align-items-center" data-in="animate__fadeIn" data-out="animate__fadeOut">    
                        <li class="">
                            <a class="anchor" href="{{route('home')}}">Início</a>
                        </li>
                        <li class="">
                            <a class="anchor" href="{{route('about')}}">Sobre</a>
                        </li>
                        <li class="">
                            <a class="anchor" href="{{route('equipe')}}">Equipe</a>
                        </li>
                        <li class="">
                            <a class="anchor" href="{{route('timeline')}}">Linha do Tempo</a>
                        </li>
                        <li class="">
                            <a class="anchor" href="{{route('contact')}}" title="Blog">Contato</a>
                        </li>
                        @if(Auth::check())
                        <li class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle-user fa-3x me-5"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark rounded-2" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item text-left" href="{{route('users')}}"><i class="fa-solid fa-users text-light me-2"></i>Usuários</a></li>
                                <li><a class="dropdown-item text-left" href="{{route('projects')}}"><i class="fa-solid fa-folder text-light me-2"></i>Projetos</a></li>
                                <li><a class="dropdown-item text-left" href="{{route('technologies')}}"><i class="fa-solid fa-computer text-light me-1"></i>Tecnologias</a></li>
                                <li><a class="dropdown-item text-left" href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket text-light me-2"></i>Sair</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<!-- navbar -->
</header>