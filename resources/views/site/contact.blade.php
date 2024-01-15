@extends('layouts.app')

@section('page-css')
<!-- css somente da pagina aqui -->
@endsection

@section('title')
<title>Contato</title> 
@endsection

@section('header')
    @include('layouts.header')
@endsection


@section('content')
<!-- Content -->
<section class="p-0">
    <div class="row">
        <section class="parallax banner-contact" style="background-image:url('assets/img/contact3.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
                <div class="container position-relative">
                <div class="row">
                    <div class="text-center">
                        <h1 class="text-white text-shadow">Fale Conosco</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<section class="header-about p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-5">
                <div class="">
                    <div class="">
                    
                    <div class="box-contact text-start rounded-1 px-4">
                        <h5 class="mt-3 pt-3 px-3">Mande uma mensagem</h5>
                        <p class="px-3">que em breve responderemos!</p>

                        <form class="mt-4 p-3" method="POST" action="{{route('ticket.store')}}" id="send-message" name="send-message" enctype="multipart/form-data">
                    
                            @csrf
                            <div class="row form-group">

                                <div class="col-6 mb-2">
                                    <input class="mt-1 form-contact form-control" type="text" name="name" id="name" placeholder="Nome" maxlength="60" required="">
                                </div>

                                <div class="col-6 mb-2">
                                    <input class="mt-1 form-contact form-control" type="email" name="email" id="email" placeholder="Email" maxlength="60" required=""> 
                                </div>

                                <div class="col-12 mb-2">
                                    <select name="subject" id="assunto" class="form-contact col-12 form-select" required="">
                                        <option disabled="" selected="">-- Selecione um Assunto --</option>
                                        <option value="Dúvida">Dúvida</option>
                                        <option value="Crítica">Crítica</option>
                                        <option value="Sugestão">Sugestão</option>
                                    </select>
                                </div>

                                <div class="">
                                    <textarea class="form-contact form-control" name="description" id="descricao" cols="30" rows="8" required="" placeholder="DEIXE SUA MENSAGEM"></textarea>
                                </div>

                                

                                <div class="mt-2 p-2">
                                    <button class="btn btn-primary d-inline-block" type="submit"> <strong>ENVIAR</strong></button>
                                </div>
                                @if(Session::has('message'))
                                <div id="alert" class="alert {{ Session::get('alert-class') }} alert-dismissible fade show" role="alert">
                                    <p>{{ Session::get('message') }}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

                                
                            </div>
                        </form>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-5 mt-5">
                <div class="row mt-3">
                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3833390394675!2d-38.523988885131665!3d-3.7263159442056257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7484e00314edd%3A0x13612a63665128b!2sInstituto%20de%20Planejamento%20de%20Fortaleza%20(IPLANFOR)%20-%20Pr%C3%A9dio%20Anexo!5e0!3m2!1spt-BR!2sbr!4v1661450245958!5m2!1spt-BR!2sbr" width="100%" height="455" class="border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-7 col-md-6">
                        <div class="card">
                            <img class="filter-green mt-3 mb-2" src="assets/img/icons/telephone.svg" alt="">
                            <h5 class="text-center">Telefone</h5>
                            <p class="text-center lh-1">(85) 3105-1285</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="card space">
                            <img class="filter-blue mt-3 mb-2" src="assets/img/icons/geo-alt.svg" alt="">
                            <h5 class="text-center">Endereço</h5>
                            <p class="text-center lh-1">Rua Vinte e Cinco de Março, 268 - Fortaleza/CE</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

        <!-- Google Map
        ============================================= -->
        <div class="container-fluid">
	        
        </div>
    </div>    

<!-- #content end -->
@endsection        

@section('footer')
    @include('layouts.footer')
@endsection

