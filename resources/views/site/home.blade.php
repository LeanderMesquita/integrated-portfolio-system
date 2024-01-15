@extends('layouts.app')


@section('title')
<title>Projetos DISIN</title> 
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section class="p-0 bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="swiper-container full-screen px-0 hover-option3" data-slider-options='{ "loop": false, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "slidesPerView": "1" }'>
                <div class="swiper-wrapper">
                    <!-- start slide item -->
                    @if(count($projects) > 0)
                        @php($count = 0)
                        @foreach($projects as $project)
                            @php(++$count)
                            <a href="{{ route ('project',['id'=>$project->id,'name'=>$project->name]) }}" target="_blank" title="Acesse para mais informações">
                            <div id="cardProject" class="swiper-slide cover-background grid-item text-start" style='background-image:url({{url("storage/projects/{$project->image[0]}")}});'>
                                    <div class="slide-hover-box">
                                        <div class="opacity-medium bg-black bg-black"></div>
                                        <figure class="position-absolute">
                                            <figcaption>
                                                <a href="{{ route ('project',['id'=>$project->id,'name'=>$project->name]) }}" target="_blank" title="Acesse para mais informações" class="anchor"><h6 class="font-weight-300 text-white-2 margin-20px-bottom">{{$project -> name}}</h6></a>
                                                <p class="text-white-2 w-85 md-w-100">{{$project -> description}}</p>
                                                <div class="separator-line-horrizontal-medium-light2 opacity5 bg-white margin-35px-top md-margin-15px-top"></div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                    <!-- end slide item -->
                </div>
                <!-- start slider pagination -->
                <div class="swiper-pagination swiper-pagination-four-slides swiper-pagination-white"></div>
                <!-- <div class="swiper-button-next light"><i class="ti-angle-right"></i></div>
                <div class="swiper-button-prev light"><i class="ti-angle-left"></i></div> -->
                <!-- end slider pagination -->
            </div>
        </div>
    </div>
</section>
@endsection

