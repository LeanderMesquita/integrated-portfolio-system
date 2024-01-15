@extends('layouts.admin')



@section('header-admin')
    @include('layouts.header_admin')
@endsection

@section('title')
    <title>Usuários</title>
@endsection

@section('content-admin')

<section id="content" > 
    @php($route = 'users.destroy')
    @if(Session::has('message'))
        <div id="alert" class="alert {{ Session::get('alert-class') }} alert-dismissible fade show m-5" role="alert">
            <p>{{ Session::get('message') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <!-- pagina inicial / lista de usuários -->
    <div  id="panel-custom" class="container text-justify bg-white px-5 py-0 border rounded-1 shadow p-3 mb-5 bg-body rounded">
            <div id="list-panel-custom" class="row justify-content-around mb-4">
                <div id="list-panel-heading" class="d-flex justify-content-between my-5">
                    <span class="panel-title"><h2>Usuários</h2></span>

                    <a id="add-button" role="button" data-bs-toggle="modal" data-bs-target="#infoModal" class="btn rounded-5 text-light px-4 py-3 text-center fw-bolder">
                        <i class="fa fa-plus text-light"></i>&nbsp;Adicionar Usuário
                    </a>
                </div>
                <div id="list-panel-body" class="list-panel-body">
                    <div class="table-responsive">
                        <table class="table overflow-auto table-hover border rounded-1">
                            <thead>
                                <tr class="">
                                    <th class="">Nome</th>
                                    <th class="">E-mail</th>
                                    <th class="">Nível de acesso</th>
                                    <th class="">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($users) > 0)    
                                <!-- uses native php for count variable -->
                                @php($count = 0)
                                @foreach($users as $user => $value)
                                <!-- increment the value before init variable -->
                                @php(++$count) 
                                    <tr>
                                        <td> {{$value -> name}} </td>
                                            <td> {{$value -> email}} </td>
                                                <!-- acessa as roles e procura a descrição  -->
                                                <td>  {{$value -> roles()->first()->description}} </td>
                                            <td class="text-right">
                                                <!-- Button Edit -->
                                                <a class="btn btn-secondary btn-sm" role="button" href="{{route('users.edit', ['id' =>  $value->id])}}">
                                                    <i class="fas fa-edit text-light m-1" ></i>
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
                                            <h3>Nenhum Usuário cadastrado!</h3>
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