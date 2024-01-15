@extends('layouts.admin')

@section('header-admin')
    @include('layouts.header_admin')
@endsection

@section('title')
    <title>Projetos</title>
@endsection

@section('content-admin')
    <!-- pagina inicial / lista projetos-->
<section id="content">
    @php($route = 'projects.destroy')
    @if(Session::has('message'))
        <div id="alert" class="alert {{ Session::get('alert-class') }} alert-dismissible fade show m-5" role="alert">
            <p>{{ Session::get('message') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div id="panel-custom" class="container text-justify bg-white px-5 py-0 border rounded-1 shadow p-3 mb-5 bg-body rounded">
        <div id="list-panel-custom" class="row justify-content-around mb-4">
            <div id="list-panel-heading" class="d-flex justify-content-between my-5">
                <span class="panel-title"><h2>Lista de projetos</h2></span>

                <a href="{{route('projects.create')}}" role="button" class="btn btn-primary rounded-5 text-light px-4 py-3 text-center fw-bolder">
                    <i class="fa fa-plus text-light"></i>&nbsp;Adicionar Projeto 
                </a>
            </div>
            <div id="list-panel-body" class="list-panel-body">
                <div class="table-responsive">
                    <table class="table overflow-auto table-hover border rounded-1">
                        <thead>
                            <tr class="">
                                <th class="">Foto</th>
                                <th class="">Nome do projeto</th>
                                <th class="">Data de publicação</th>
                                <th class="">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($projects) > 0)    
                                <!-- uses native php for count variable -->
                                @php($count = 0)
                                @foreach($projects as $project => $value)
                                <!-- increment the value before init variable -->
                                @php(++$count) 
                                <tr>
                                    
                                    <td> 
                                        @if(!is_null($value) && is_array($value->image) && count($value->image) > 0)
                                            <img src='{{url("storage/projects/{$value->image[0]}")}}' alt="{{$value -> image[0]}}" class="rounded float-left img-project"></td>
                                        @elseif(!is_null($value) && !is_array($value->image))
                                            <img src='{{url("storage/projects/{$value->image}")}}' alt="{{$value -> image}}" class="rounded float-left img-project"></td>
                                        @endif
                                    <td> <h6>{{$value -> name}}</h6> </td>
                                    <td> {{ date('d/m/Y' , strtotime($value -> dtCreation))}} </td>
                                    <td class="text-right">
                                        <!-- Button Edit -->
                                        <a href="{{route('projects.edit', ['id' =>  $value->id])}}" role="button" class="btn btn-secondary btn-sm">
                                            <i class="fas fa-edit text-light m-1"></i>
                                        </a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop_{{$value->id}}">
                                            <i class="fa fa-trash text-light m-1" ></i>
                                        </button>    
                                        @include('layouts.modals')
                                    </td>
                                </tr>
                                @endforeach  
                            @else
                            <tr>
                                <td class="text-center">
                                    <h3>Nenhum projeto cadastrado!</h3>
                                </td>
                            </tr>
                            @endif  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection