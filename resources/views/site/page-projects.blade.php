@extends('layouts.app')

@section('page-css')
<!-- css somente da pagina aqui -->
@endsection

@section('title')
<title>{{$projects->name}}</title>
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section class="p-0">
    <div class="row align-items-center">
        <!-- <section class="parallax banner-contact" style='background-image:url("/assets/img/patterns/backgrounds/2.jpg");'> -->
          <!-- recupera o ultimo elemento e utiliza como banner -->
        <!-- <section class="parallax banner-contact" style='background-image:url({{url("storage/projects/" . last($projects->image))}});'> -->
          <!-- recupera o 1 elemento e utiliza como banner (banner e capa) -->
        <section class="parallax banner-contact bg-blur" style='background-image:url({{url("storage/projects/{$projects->image[0]}")}});'>
            <div class="opacity-medium bg-extra-dark-gray"></div>
        </section>
              <div class="container position-absolute">
                <div class="row">
                    <div class="text-center">
                      <h1 class="text-white-2 text-shadow margin-10px-bottom">Conheça o {{$projects->name}}</h1>
                      <span class="text-white-2 opacity6 alt-font text-shadow">para mais informações entre em contato.</span>
                    </div>
                </div>
              </div>
        
    </div>
</section>

<section class="bg-graylight pt-5 mb-5 mt-5">
  <div class="container mb-5 rounded-4">
    <div class="row justify-content-between my-2">

    <div id="carrossel" class="col-lg-8 pt-3">
      <div id="container-carrossel" class="carousel slide my-3 mx-2 rounded-2" data-bs-ride="carousel">
          <div id="carousel-inner" class="carousel-inner">
              @if (!empty($projects->image) && is_array($projects->image) && count($projects->image) > 0)
                  @foreach($projects->image as $i => $image)
                      <div id="carousel-item-{{ $i }}" class="carousel-item{{ $i === 0 ? ' active' : '' }}">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#zoomModal">
                              <img src='{{ url("storage/projects/{$image}") }}' alt="{{ $image }}" class="float-left d-block w-100 img-xl rounded-3">
                          </a>
                      </div>
                  @endforeach
              @endif
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#container-carrossel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#container-carrossel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>

      @include('layouts.modals')
  </div>

      <div class="col-lg-4 py-3">
        <div class="py-2">
            <div class="overflow-y-auto scroller p-2 m-2" id="card_projectDescription">
              <h3 class="pre-title mb-4 p-0"> Informações do Projeto:</h3>
              <span class="response-label">{{$projects->description}}</span>
            </div>
    
            <div class=" p-2 m-2 scrolling-wrapper" id="card_projectInfo">
              <h3 class="pre-title mb-4 p-0">Dados do Projeto:</h3>
              <div class="pt-3">
                <div id="project_date">
                  <span class="label">Data de lançamento:</span>
                  <span class="response-label">{{date('d/m/Y' , strtotime($projects -> dtCreation))}}</span>
                </div>
                <div class="pt-3" id="project_avaliable">
                  <span class="label">Status do projeto:</span>
                  @if($projects->avaliable == 1)
                  <span class="response-label pt-2">Ativo <i class="fa-solid fa-circle-check"></i></span>
                  @else
                  <span class="response-label pt-2">Inativo <i class="fa-solid fa-circle-xmark"></i></span>
                  @endif
                </div>
                <br>
                <div class="mb-4" id="project_technologies">
                  <span class="label">Tecnologias utilizadas:</span>
                  <div class="pt-2 scroll-container">
                    @foreach($projects->technologies()->get() as $technology)
                      <span class="response-label">
                        <img src='{{url("storage/technologies/{$technology->icon}")}}' alt="{{$technology->icon}}" title="{{$technology->name}}" class="img-technology m-2">
                      </span>
                    @endforeach
                  </div>
                </div>
                <div id="project_agency">
                  <span class="label">Orgãos Envolvidos:</span>
                  <div class="pt-2 scroll-container">
                    <span class="response-label">{{ implode(', ', $projects->responsible_agency) }}</span>
                  </div>
                </div>
              </div>
            </div>
    
            <div id="card_buttons" class="p-1">
              <a class="text-white btn btn-secondary mx-2 py-2 px-3" role="button" href="{{ route ('contact') }}" target="_blank">Fale Conosco</a>
              <a class="text-white btn btn-primary mx-2 py-2 px-3" role="button" href="{{$projects->current_link}}" target="_blank">Acesse</a>
            </div>
        </div>
        
      </div>

    </div>

  </div>
</section>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection