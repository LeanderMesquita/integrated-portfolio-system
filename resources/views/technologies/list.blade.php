@extends('layouts.admin')

@section('header-admin')
    @include('layouts.header_admin')
@endsection

@section('title')
    <title>Tecnologias</title>
@endsection

@section('content-admin')
    <!-- pagina inicial / lista tecnologias -->
    @php($route = 'technologies.destroy')
<section id="content">
    @if(Session::has('message'))
        <div id="alert" class="alert {{ Session::get('alert-class') }} alert-dismissible fade show m-5" role="alert">
            <p>{{ Session::get('message') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div id="panel-custom" class="container-custom container text-justify bg-white px-5 py-0 border rounded-1 shadow p-3 mb-5 bg-body rounded">
        <div id="list-panel-custom" class="row justify-content-around mb-4">
            <div id="list-panel-heading" class="d-flex justify-content-between my-5">
                <span class="panel-title"><h2>Lista de tecnologias</h2></span>

                <a id="add-button" href="{{route('technologies.create')}}" role="button" class="btn rounded-5 text-light px-4 py-3 text-center fw-bolder">
                    <i class="fa fa-plus text-light"></i>&nbsp;Adicionar Tecnologia
                </a>
            </div>
            <div id="list-panel-body" class="list-panel-body">
                <div class="table-responsive">
                    <table class="table overflow-auto table-hover border rounded-1">
                        <thead>
                            <tr class="">
                                <th class="">Icon</th>
                                <th class="">Nome da tecnologia</th>
                                <th class="">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($technologies) > 0)    
                                <!-- uses native php for count variable -->
                                @php($count = 0)
                                @foreach($technologies as $technology => $value)
                                <!-- increment the value before init variable -->
                                @php(++$count) 
                                <tr>
                                    <td> <img src='{{url("storage/technologies/{$value->icon}")}}' alt="{{$value->icon}}" class="rounded float-left img-project"></td>
                                    <td> <h6>{{$value -> name}}</h6> </td>
                                    <td class="text-right">
                                        <!-- Button Edit -->
                                        <a href="{{route('technologies.edit', ['id' =>  $value->id])}}" role="button" class="btn btn-secondary btn-sm">
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
                                    <h3>Nenhuma tecnologia cadastrada!</h3>
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