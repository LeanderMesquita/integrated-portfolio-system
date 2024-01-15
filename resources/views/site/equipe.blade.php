@extends ('layouts.app')

@section ('page-css')
    <!-- css da página aqui -->
@endsection

@section('title')
    <title>Equipe - DISIN</title>
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<!-- #content -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/images/Brasao-32x32.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
</head>
    <body class="w-100">

        <section class="wow animate__fadeIn parallax bg vh-100 d-flex align-items-center fs-3" data-parallax-background-ratio="0.5" style="background-image:url('assets/img/images/backgrounds/parallax-about.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 extra-small-screen page-title-large d-flex flex-column justify-content-center text-center">
                        <!-- start page title -->
                        <h1 class="text-white-2 text-shadow margin-10px-bottom">Equipe DISIN</h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font text-shadow">Uma equipe multidisciplinar</span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start team section heading -->
        <section class=" wow animate__fadeIn parallax sm-background-image-center p-0" data-parallax-background-ratio="0.5" style="background-color: #fff;">
            <div class="container-fluid mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-9 col-sm-10 text-center last-paragraph-no-margin">
                        <h5 class="font-weight-700 text-extra-dark-gray margin-15px-bottom text-uppercase">Diretoria e Gerência</h5>
                        <p class="w-100 sm-w-100 sm-no-margin-bottom">A diretoria/gerência do DISIN lidera a implementação de políticas de TI e Comunicação de Dados, promovendo soluções tecnológicas para apoiar as atividades institucionais. Gerencia dados geográficos, planeja e supervisiona o desenvolvimento de produtos e serviços de TI, priorizando a otimização de processos. Centraliza esforços na coleta e disponibilização de informações sobre Fortaleza, oferecendo suporte a pesquisas e normalização de documentos.</p>
                    </div>  
                </div>   
            </div>
            <div class="container-fluid padding-seventeen-lr lg-padding-seven-lr xl-padding-thirteen-lr sm-padding-15px-lr mt-5">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
                    <!-- start team item -->
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/ana.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável pela gerência da equipe baseando-se nas políticas, normas e padrões adotados pelo Município na área de TI e Comunicação de Dados. Atua também para identificar e propor soluções de aplicação de tecnologias no suporte às atividades do IPLANFOR e de seus programas finalísticos.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Ana Cláudia Teixeira</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Diretora de Tecnologia</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/barbara2.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável por gerenciar e estabelecer métodos e técnicas para o tratamento das informações do banco de dados geográficos integrado, consolidando e monitorando a atualização dos dados pelos demais órgãos e entidades municipais.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Bárbara Morais</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Gerência do Sistema de Informações Geográficas</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/jeandy.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável por planejar, propor e gerenciar o desenvolvimento de produtos, serviços e soluções de Tecnologia da Informação, garantindo infraestrutura, documentação e otimização dos processos de TI, tendo como princípio o potencial criativo humano.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Jeandy Meneses</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Gerente de Tecnologia da Informação</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/joseline.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável por coletar, analisar, selecionar, organizar e disponibilizar informações sobre a cidade de Fortaleza; orientar a normalização de documentos; prestar atendimento a usuários internos e externos em pesquisas no Acervo; exercer outras atividades correlatas.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Joseline Veras</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Gerente de Acervo</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class=" wow animate__fadeIn parallax sm-background-image-center p-0" data-parallax-background-ratio="0.5" style="background-color: #fff;">
            <div class="container-fluid mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-9 col-sm-10 text-center last-paragraph-no-margin">
                        <h5 class="font-weight-700 text-extra-dark-gray margin-15px-bottom text-uppercase">Equipe técnica - Desenvolvimento e Infraestrutura</h5>
                        <p class="w-100 sm-w-100 sm-no-margin-bottom">A equipe técnica de Desenvolvimento e Infraestrutura do DISIN lidera a implementação de políticas de TI, gerenciando eficientemente dados geográficos e otimizando processos. Com foco na criatividade humana, centraliza esforços na coleta e disponibilização de informações sobre Fortaleza, fornecendo suporte essencial a pesquisas e normalização de documentos.</p>
                    </div>  
                </div>   
            </div>
            <div class="container-fluid padding-seventeen-lr lg-padding-seven-lr xl-padding-thirteen-lr sm-padding-15px-lr mt-5">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
                    <!-- start team item -->
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/augusto3.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Atualmente trabalha na manutenção e desenvolvimento dos seguintes produtos: Fortaleza em Mapas, Fortaleza em Bairros, Totens do Observatório de Fortaleza, Zonas Especiais de Fortaleza e Foruns Territoriais.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Augusto Feitosa</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Programador de Sistemas</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/diego2.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável pela criação de conteúdo gráfico em geral. Elabora identidade visual e peça gráfica para mídia impressa e online. Promove soluções de usabilidade, design de interfaces e front-end.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Diego Macedo</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Designer de Interfaces</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/gerson.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Colabora no desenvolvimento e manutenção de sites e sistemas do Iplanfor.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Gerson Castro</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Analista de Sistemas</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/jesse.JPG" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável pela implantação e manutenção dos servidores e infraestruta de sistemas, entre eles: Servidor de produção, Geoserver, Mercúrio entre outros.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Jessé Pereira</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Programador de Sistemas</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
                    <!-- start team item -->
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/leonardo.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Colabora no desenvolvimento de software para sistemas de informação do IPLANFOR nos seguintes produtos: Site Fortaleza 2040, Site do Observatório de Fortaleza, Fortaleza em Bairros e projeto Rede de Observatórios do Ceará.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Leonardo Alves</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Programador de Sistemas</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/luciano.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável pelo atendimento das requisições dos usuários, manutenção do parque de informática. Atua principalmente no Service Desk e controle de equipamentos.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Luciano OLiveira</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Suporte Técnico</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/nerson.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">DevOps, auxilia nas atividades de planejamento, implantação e manutenção de infraestrutura dos sistemas da informação do IPLANFOR.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Nerson Moura</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Analista de Sistemas</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/prodacy2.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável pela manutenção dos produtos: Sistema de Gestão e Acompanhamento do Plano Fortaleza 2040 - SIGA2040, Acervo Digital e pelo desenvolvimento dos produtos: Agricultura Urbana, Fortaleza em Mapas Mobile e Acervo Admin.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Prodacy Soares</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Programador de Sistemas</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/sergio.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Faz o acompanhamento de todos os processos que estão sob responsabilidade da DISIN, relativos a obras, aquisição de mobiliário e equipamentos, levantamento de informações, etc. Atua na elaboração de mapas que servirão como instrumentos informativos do Plano Fortaleza 2040.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Sérgio Pires</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Arquiteto</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col team-block text-start team-style-1 margin-40px-bottom md-margin-seven-bottom sm-margin-30px-bottom wow animate__fadeInRight">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="assets/img/images/photos/team/samuel.jpg" alt="">
                                <div class="overlay-content text-center d-flex align-items-end justify-content-center">
                                    <div class="icon-social-small padding-seven-all">
                                        <span class="text-white-2 text-small d-inline-block m-0">Responsável em ajudar na manuntenção de websites do iplanfor.</span>
                                        <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                        <a href="http://www.twitter.com" target="_blank" class="text-white-2"><i class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com" target="_blank" class="text-white-2"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Wandely Samuel</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Estagiário DEV</div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                </div>
                
            </div>
        </section>
        
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
<!-- #content end -->    
@endsection


@section('footer')
    @include('layouts.footer')
@endsection

    

