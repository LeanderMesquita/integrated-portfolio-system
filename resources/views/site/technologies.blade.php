@extends('layouts.app')

@section('page-css')
<!-- css somente da pagina aqui -->
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
</head>
@endsection

@section('title')
<title>Tecnologias</title>
@endsection

@section('header')
    @include('layouts.header_admin')
@endsection

@section('content')
<!-- Content -->
<section id="content">
                
                <div class="content-wrap">
                    
                    <div class="container clearfix">
                        <h3>Pesquise por tecnologia:</h3>
                        <!-- Portfolio Filter
                            ============================================= -->
                    <ul id="portfolio-filter" class="clearfix">
                        
                        <li class="activeFilter">
                            <a href="#" data-filter="*">
                                <img src="assets/img/tecnologias/todas.png" alt="" class="src">
                                <span>Todas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".aframe">
                                <img src="assets/img/tecnologias/aframe.png" alt="" class="src">
                                <span>Aframe</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".alfresco">
                                <img src="assets/img/tecnologias/alfresco.svg" alt="" class="src">
                                <span>Alfresco</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".android">
                                <img src="assets/img/tecnologias/android.svg" alt="" class="src">
                                <span>Android</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".angular">
                                <img src="assets/img/tecnologias/angular.svg" alt="" class="src">
                                <span>Angular.js</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".bootstrap">
                                <img src="assets/img/tecnologias/bootstrap.png" alt="" class="src">
                                <span>Bootstrap</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".codeigniter">
                                <img src="assets/img/tecnologias/codeigniter.svg" alt="" class="src">
                                <span>Codeigniter</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".cmis">
                                <img src="assets/img/tecnologias/cmis.svg" alt="" class="src">
                                <span>CMIS</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".css">
                                <img src="assets/img/tecnologias/css.svg" alt="" class="src">
                                <span>CSS3</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".cups">
                            <img src="assets/img/tecnologias/cups.png" alt="">
                            <span>Cups</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".geoserver">
                              <img src="assets/img/tecnologias/geoserver.png" alt="">
                              <span>Geoserver</span>
                              <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                          </li>
                        <li>
                            <a href="#" data-filter=".grunt">
                                <img src="assets/img/tecnologias/grunt.svg" alt="">
                                <span>Grunt</span>
                                <img src="assets/img/tecnologias//Sombrinha.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".hibernate">
                                <img src="assets/img/tecnologias/hibernate.svg" alt="">
                                <span>Hibernate</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".html">
                                <img src="assets/img/tecnologias/html.svg" alt="" class="src">
                                <span>HTML5</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".ionic">
                            <img src="assets/img/tecnologias/ionic.svg" alt="" class="src">
                            <span>Ionic</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                        </a>
                    </li>
                        <li>
                          <a href="#" data-filter=".ios">
                            <img src="assets/img/tecnologias/ios.svg" alt="iOS" class="src">
                            <span>iOS</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                          </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".java">
                            <img src="assets/img/tecnologias/java.svg" alt="" class="src">
                            <span>Java</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                          </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".javascript">
                            <img src="assets/img/tecnologias/javascript.svg" alt="" class="src">
                            <span>Javascript</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                          </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".jquery">
                              <img src="assets/img/tecnologias/jquery.svg" alt="">
                              <span>JQuery</span>
                              <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                          </li>
                        <li>
                          <a href="#" data-filter=".jsf">
                            <img src="assets/img/tecnologias/jsf.svg" alt="">
                            <span>JSF</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".laravel">
                            <img src="assets/img/tecnologias/laravel.svg" alt="">
                            <span>Laravel</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".leaflet">
                              <img src="assets/img/tecnologias/leaflet.svg" alt="">
                              <span>Leaflet</span>
                              <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                          </li>
                        <li>
                            <a href="#" data-filter=".materialize">
                              <img src="assets/img/tecnologias/materialize.svg" alt="" class="src">
                              <span>Materialize</span>
                              <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                          </li>
                        <li>
                          <a href="#" data-filter=".mysql">
                            <img src="assets/img/tecnologias/mysql.svg" alt="" class="src">
                            <span>MySQL</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                          </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".nas4free">
                                <img src="assets/img/tecnologias/nas4free.png" alt="">
                                <span>NAS4Free</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                        </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".ocs">
                            <img src="assets/img/tecnologias/ocs.png" alt="">
                            <span>OCS Inventory</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".onsenui">
                              <img src="assets/img/tecnologias/onsenui.svg" alt="">
                              <span>Onsen UI</span>
                              <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                          </li>
                        <li>
                          <a href="#" data-filter=".pentaho">
                            <img src="assets/img/tecnologias/pentaho.svg" alt="">
                            <span>Pentaho</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".pfsense">
                            <img src="assets/img/tecnologias/pfsense.png" alt="">
                            <span>pfSense</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".php">
                            <img src="assets/img/tecnologias/php.svg" alt="" class="src">
                            <span>PHP</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                          </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".postgresql">
                              <img src="assets/img/tecnologias/postgresql.svg" alt="" class="src">
                              <span>PostgreSQL</span>
                              <img src="assets/img/tecnologias/Sombrinha.png" alt="" class="src">
                            </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".powerbi">
                            <img src="assets/img/tecnologias/power-bi.png" alt="">
                            <span>Power Bi</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".samba">
                                <img src="assets/img/tecnologias/samba.png" alt="">
                                <span>Samba</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".spring">
                                <img src="assets/img/tecnologias/spring.svg" alt="">
                                <span>Spring Framework</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".ubiquiti">
                                <img src="assets/img/tecnologias/ubiquiti.png" alt="">
                                <span>Ubiquiti</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".vnc">
                                <img src="assets/img/tecnologias/vnc.png" alt="">
                                <span>VNC</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".wordpress">
                            <img src="assets/img/tecnologias/wordpress.svg" alt="">
                            <span>Wordpress</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".zabbix">
                                <img src="assets/img/tecnologias/zabbix.png" alt="">
                                <span>Zabbix</span>
                                <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                            </a>
                        </li>
                        <li>
                          <a href="#" data-filter=".zend">
                            <img src="assets/img/tecnologias/zend.svg" alt="">
                            <span>Zend Framework</span>
                            <img src="assets/img/tecnologias/Sombrinha.png" alt="">
                          </a>
                        </li>
                        
                    </ul><!-- #portfolio-filter end -->

                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="clearfix">

                        <article class="portfolio-item html css javascript jquery php postgresql bootstrap">
                            <div class="portfolio-image">
                                <a href="portfolio/agricultura-urbana.html">
                                    <img src="assets/img/produtos/agricultura-urbana.png" alt="Agricultura Urbana">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/agricultura-urbana.html">Agricultura Urbana</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript jquery php postgresql bootstrap">
                            <div class="portfolio-image">
                                <a href="portfolio/premio-urbis.html">
                                    <img src="assets/img/produtos/Capa_PremioUrbis_low.png" alt="Prêmio Urbis">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/premio-urbis.html">Prêmio Urbis</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript php bootstrap">
                            <div class="portfolio-image">
                                <a href="portfolio/wuf-13.html">
                                    <img src="assets/img/produtos/wuf-13.png" alt="World Urban Forum 13 - Candidatura">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/wuf-13.html">WUF13 - Candidatura</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item aframe html css javascript jquery laravel bootstrap php">
                            <div class="portfolio-image">
                                <a href="portfolio/tour-virtual.html">
                                    <img src="assets/img/produtos/tour-virtual.png" alt="Tour Virtual">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/tour-virtual.html">Tour Virtual</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript jquery php codeigniter mysql bootstrap grunt leaflet">
                            <div class="portfolio-image">
                                <a href="portfolio/observatorio-de-fortaleza.html">
                                    <img src="assets/img/produtos/observatorio-de-fortaleza.png" alt="Observatório de Fortaleza">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/observatorio-de-fortaleza.html">Observatório de Fortaleza</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript php bootstrap geoserver laravel leaflet">
                            <div class="portfolio-image">
                                <a href="portfolio/mapa-colaborativo.html">
                                    <img src="assets/img/produtos/mapacolaborativo.png" alt="Mapa Colaborativo do Plano Diretor de Fortaleza">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/mapa-colaborativo.html">Mapa Colaborativo do Plano Diretor de Fortaleza</a></h3>
                            </div>
                        </article>
                        
                        <!-- <article class="portfolio-item html css javascript jquery postgresql php laravel bootstrap">
                            <div class="portfolio-image">
                                <a href="portfolio/fortaleza-em-bairros.html">
                                    <img src="assets/img/produtos/fortaleza-em-bairros.png" alt="Fortaleza em Bairros">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/fortaleza-em-bairros.html">Fortaleza em Bairros</a></h3>
                            </div>
                        </article> -->

                        <article class="portfolio-item html css javascript jquery php postgresql bootstrap laravel">
                            <div class="portfolio-image">
                                <a href="portfolio/foruns-territoriais.html">
                                    <img src="assets/img/produtos/foruns-territoriais.png" alt="Fóruns Territoriais">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/foruns-territoriais.html">Fóruns Territoriais</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css laravel php javascript jquery materialize postgresql powerbi grunt">
                            <div class="portfolio-image">
                                <a href="portfolio/camaras-setoriais.html">
                                    <img src="assets/img/produtos/sistema_das_camaras4.png" alt="Siga 2040">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/camaras-setoriais.html">Siga 2040</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css laravel php javascript jquery postgresql bootstrap">
                            <div class="portfolio-image">
                                <a href="portfolio/rede-observa.html">
                                    <img src="assets/img/produtos/redeobserva.png" alt="Rede Observa CE">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/rede-observa.html">Rede Observa CE</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item alfresco cmis html css java javascript jquery php mysql postgresql bootstrap">
                            <div class="portfolio-image">
                                <a href="portfolio/acervo-digital.html">
                                    <img src="assets/img/produtos/acervo.png" alt="Acervo Digital">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/acervo-digital.html">Acervo Digital</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript php codeigniter mysql ionic android ios angular">
                            <div class="portfolio-image">
                                <a href="portfolio/xo-mosquito.html">
                                    <img src="assets/img/produtos/xomosquito-desativado.png" alt="Xô Mosquito">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/xo-mosquito.html">Xô Mosquito</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript angular php codeigniter mysql">
                            <div class="portfolio-image">
                                <a href="portfolio/fortaleza-2040.html">
                                    <img src="assets/img/produtos/fortaleza2040.png" alt="Fortaleza 2040">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/fortaleza-2040.html">Fortaleza 2040</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript jquery angular php mysql">
                            <div class="portfolio-image">
                                <a href="portfolio/colegiados-de-fortaleza.html">
                                    <img src="assets/img/produtos/colegiados.png" alt="Colegiados de Fortaleza">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/colegiados-de-fortaleza.html">Colegiados de Fortaleza</a></h3>
                            </div>
                        </article>
                        <article class="portfolio-item html css javascript postgresql leaflet php geoserver bootstrap">
                            <div class="portfolio-image">
                                <a href="portfolio/fortaleza-em-mapas.html">
                                    <img src="assets/img/produtos/fortalezaemmapas.png" alt="Fortaleza em Mapas">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/fortaleza-em-mapas.html">Fortaleza em Mapas</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="portfolio/zonas-especiais.html">
                                    <img src="assets/img/produtos/zonas-especiais-4.png" alt="Zonas Especiais">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/zonas-especiais.html">Zonas Especiais</a></h3>
                            </div>
                        </article>

                        <!-- <article class="portfolio-item bootstrap html css javascript jquery onsenui laravel leaflet php postgresql">
                            <div class="portfolio-image">
                                <a href="portfolio/arbovirose.html">
                                    <img src="images/produtos/arbovirose-4.png" alt="Arbovirose">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/arbovirose.html">Arbovirose</a></h3>
                            </div>
                        </article> -->

                        <article class="portfolio-item bootstrap html css javascript jquery git postgresql">
                            <div class="portfolio-image">
                                <a href="portfolio/observatorio-do-turismo.html">
                                    <img src="assets/img/produtos/observatorio-do-turismo.png" alt="Observatório do Turismo">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/observatorio-do-turismo.html">Observatório do Turismo</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript jquery php postgresql powerbi laravel bootstrap">
                            <div class="portfolio-image">
                                <a href="portfolio/intranet.html">
                                    <img src="assets/img/produtos/intranet.png" alt="Intranet">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/intranet.html">Intranet</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item ">
                            <div class="portfolio-image">
                                <a href="portfolio/service-desk.html">
                                    <img src="assets/img/produtos/servicedesk.png" alt="Ata Web">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/service-desk.html">Service Desk</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript angular php codeigniter mysql">
                            <div class="portfolio-image">
                                <a href="portfolio/cadastro-habitacional.html">
                                    <img src="assets/img/produtos/habitafor.png" alt="Intranet">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/cadastro-habitacional.html">Cadastro habitacional</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css postgresql java jsf hibernate">
                            <div class="portfolio-image">
                                <a href="portfolio/ata-web.html">
                                    <img src="assets/img/produtos/ataweb.png" alt="Ata Web">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/ata-web.html">Ata Web</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item java spring">
                            <div class="portfolio-image">
                                <a href="portfolio/memoria-institucional.html">
                                    <img src="assets/img/produtos/memoria-institucional.png" alt="Memória Institucional">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/memoria-institucional.html">Memória Institucional</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript angular zend mysql">
                            <div class="portfolio-image">
                                <a href="portfolio/sala-setorial.html">
                                    <img src="assets/img/produtos/salasetorial.png" alt="Intranet">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/sala-setorial.html">Sala Setorial</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item ubiquiti pfsense">
                            <div class="portfolio-image">
                                <a href="portfolio/wifi-iplanfor.html">
                                    <img src="assets/img/produtos/wifi-iplanfor.png" alt="Wifi IPLANFOR">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/wifi-iplanfor.html">Wifi IPLANFOR</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item vnc">
                            <div class="portfolio-image">
                                <a href="portfolio/suporte-remoto.html">
                                    <img src="assets/img/produtos/suporte-remoto.png" alt="Suporte Remoto">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/suporte-remoto.html">Suporte Remoto</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item zabbix">
                            <div class="portfolio-image">
                                <a href="portfolio/sgsi.html">
                                    <img src="assets/img/produtos/sgsi.png" alt="Projeto SGSI">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/sgsi.html">Projeto SGSI</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item samba">
                            <div class="portfolio-image">
                                <a href="portfolio/compartilhamento-arquivos.html">
                                    <img src="assets/img/produtos/compartilhamento-arq.png" alt="Compartilhamento de arquivos">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/compartilhamento-arquivos.html">Compartilhamento de arquivos</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item ubiquiti pfsense">
                            <div class="portfolio-image">
                                <a href="portfolio/infra-rede.html">
                                    <img src="assets/img/produtos/infra-rede.png" alt="Infraestrutura de rede">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/infra-rede.html">Infraestrutura de rede</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript jquery bootstrap laravel php postgresql">
                            <div class="portfolio-image">
                                <a href="portfolio/controle-equipamentos.html">
                                    <img src="assets/img/produtos/controleequipamentos.png" alt="Controle de Equipamentos TI">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/controle-equipamentos.html">Controle de Equipamentos TI</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item nas4free">
                            <div class="portfolio-image">
                                <a href="portfolio/servidor-arquivos.html">
                                    <img src="assets/img/produtos/servidor-arquivos.png" alt="Servidor de arquivos">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/servidor-arquivos.html">Servidor de arquivos</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item cups">
                            <div class="portfolio-image">
                                <a href="portfolio/servidor-impressao.html">
                                    <img src="assets/img/produtos/servidor-impressao.png" alt="Servidor de impressão">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/servidor-impressao.html">Servidor de impressão</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item ocs">
                            <div class="portfolio-image">
                                <a href="portfolio/gerenciamento-ativos.html">
                                    <img src="assets/img/produtos/gerenciamento-ativos.png" alt="Gerenciamento e Implantação de ativos">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/gerenciamento-ativos.html">Gerenciamento e Implantação de ativos</a></h3>
                            </div>
                        </article>

                        <article class="portfolio-item html css javascript php angular postgresql codeigniter">
                            <div class="portfolio-image">
                                <a href="portfolio/sgps.html">
                                    <img src="assets/img/produtos/sgps-desativado.png" alt="SGPS">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio/sgps.html">SGPS</a></h3>
                            </div>
                        </article>


                    </div><!-- #portfolio end -->

                </div>

            </div>
</section>
<!-- #content end -->
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

