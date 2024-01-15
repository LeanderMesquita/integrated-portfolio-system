@extends('layouts.app')

@section('page-css')
<!-- css somente da pagina aqui -->
@endsection

@section('title')
<title>Sobre</title> 
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<!-- Content -->
<section class="p-0">
  <div class="row">
    <section class="parallax banner-about vh-100 d-flex align-items-center fs-3" style="background-image:url('assets/img/BG_PortfolioIplanfor.jpg');">
      <div class="opacity-medium bg-extra-dark"></div>
        <div class="container position-relative">
          <div class="row">
            <div class="text-center">
              <h1 class="text-white text-shadow">DISIN</h1>
              <span class="text-white-2 opacity6 alt-font text-shadow">Diretoria de Sistema de Informação</span>
            </div>
          </div>
        </div>
    </section>  
  </div>
</section>

<section class="service-about p-0 mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-3">
        <h4 class="hero-title mt-5 mb-2">Sobre</h4>
          <p class="title-about">    
            Encarregado da gestão, supervisão e elaboração de estratégias no âmbito das operações vinculadas aos sistemas de informação, assistência a sistemas computacionais e apoio à tomada de decisões e inteligência empresarial. Desempenha um papel crucial no acompanhamento das diretorias responsáveis pelo acervo, sistemas geográficos e tecnologia, assegurando uma administração eficiente e integrada dessas áreas. 
          </p>
      </div>
      <div class="col-lg-6 col-md-12 mt-3 d-flex">
        <img class="logo-ipla d-flex justify-content-center" src="assets/img/Logo_IPLA_Full_Col_Preto.svg" alt="">
      </div>
    </div>
  </div>
</section>
<div class="new-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-5">
        <ul class="timeline-about">
          <li>
            <div class="timeline-image">
              <img class="img-circle img-responsive mt-3" src="{{asset('/assets/img/icons/geo.png')}}" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="possibility-1">Gerência de Sistemas Geográficos</h4>
              </div>
              <div class="timeline-body">
                <p class="">Gerencia e estabelece métodos e técnicas para o tratamento das informações do banco de dados geográficos integrado, consolidando e monitorando a atualização dos dados pelos demais órgãos e entidades municipais.</p>
              </div>
            </div>
            
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="img-circle img-responsive mt-3" src="{{asset('/assets/img/icons/technology.png')}}" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="possibility-1">Gerência de Tecnologias</h4>
              </div>
              <div class="timeline-body">
                <p class="">Planeja, propõe e gerencia o desenvolvimento de produtos, serviços e soluções de Tecnologia da Informação, garantindo infraestrutura, documentação e otimização dos processos de TI, tendo como princípio o potencial criativo humano.</p>
              </div>
            </div>
            
          </li>
          <li>
            <div class="timeline-image">
              <img class="img-circle img-responsive mt-3" src="{{asset('/assets/img/icons/acervo.png')}}" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="possibility-1">Gerência do Acervo</h4>
              </div>
              <div class="timeline-body">
                <p class="">Coleta, analisa, seleciona, organiza e disponibiliza, informações sobre a Cidade de Fortaleza, contribuindo para a geração e disseminação do conhecimento. Presta atendimento a usuários internos e externos em pesquisas no acervo.</p>
              </div>
            </div>
            <div class="line"></div>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>

<div class="d-none">
<section class="about p-0">
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <h2 class="great-title">Nossos Serviços</h2>
        <h3 class="great-subtitle">Infraestrutura e Desenvolvimento</h3>
      </div>
   </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
        <div class="d-flex justify-content center align-items-center">
          <img class="img-about" src="assets/img/icons/man-pc.png" alt="">
            <h3 class="card-title text-start ms-3">Manutenção de Computador ou Notebook</h3>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
        <div class="d-flex justify-content center align-items-center">
          <img class="img-about" src="assets/img/icons/printer.png" alt="">
            <h3 class="card-title text-start ms-3">Instalação e/ou Configuração de Impressoras ou Scanners</h3>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
        <div class="d-flex justify-content center align-items-center">
          <img class="img-about" src="assets/img/icons/man-sof.png" alt="">
            <h3 class="card-title text-start ms-3">Manutenção de software</h3>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
        <div class="d-flex justify-content center align-items-center">
          <img class="img-about" src="assets/img/icons/arq-sof.png" alt="">
            <h3 class="card-title text-start ms-3">Definição da arquitetura de software</h3>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
        <div class="d-flex justify-content center align-items-center">
          <img class="img-about" src="assets/img/icons/elementos-visuais.png" alt="">
            <h3 class="card-title text-start ms-3">Identidade e Elementos Visuais</h3>
        </div>
      </div>

    </div>

  </div>
</section>
</div>

<!-- #content end -->
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

