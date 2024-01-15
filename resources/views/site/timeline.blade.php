@extends('layouts.app')


@section('title')
<title>Linha do Tempo</title> 
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <section id="timeline" class="timeline-container">
        <!-- <div class="timeline-header">
            <h2 class="timeline-header__title">Iplanfor</h2>
            <h3 class="timeline-header_subtitle">Disin</h3>
        </div> -->
        <div class="timeline">
            @if(count($projects) > 0)
                @php($count = 0)
                @foreach($projects as $project)
                    @php(++$count)
                    <div class="timeline-item" data-text="{{$project -> name}}">
                        <div class="timeline__content">
                            <a href="{{ route ('project',['id'=>$project->id,'name'=>$project->name]) }}" target="_blank">
                                <img class="timeline__img" src='{{url("storage/projects/{$project->image[0]}")}}' alt="{{$project -> image[0]}}">
                            </a>
                            <h2 class="timeline__content-title">{{ date('M y' , strtotime($project -> dtCreation))}}</h2>
                            <p class="timeline__content-desc"></p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection