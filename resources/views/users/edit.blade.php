@extends('layouts.admin')

@section('header-admin')
    @include('layouts.header_admin')
@endsection

@section('title')
    <title>Editar Usuário</title>
@endsection

@section('content-admin')
    <!-- pagina inicial / Cadastro de usuários -->
<section id="content" >
    <div id="panel-custom" class="container text-justify bg-white px-5 py-0 border rounded-1 shadow p-3 mb-5 bg-body rounded">
        <div id="list-panel-custom" class="row justify-content-around mb-4">
            <div id="list-panel-heading" class="text-center mb-2 mt-2">
                <span class="panel-title bg-light"><h3>Editar</h3></span>
            </div>
            <div class="list-panel-body">
                <div class="table-responsive">
                <form id="form-admin" class="form-horizontal" method="POST" action="{{route('users.update')}}">

                        <input type="hidden" name="id" id="id" value="{{ $user->id }}">

                        @csrf
                        <div class="p-3">
                            <div class="text-form-create">
                                <div class="mb-3">
                                    <label for="name">NOME</label>
                                    <input name="name" value="{{ $user->name }}" type="text" placeholder="Novo nome" required="">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="email">E-MAIL</label>
                                    <input name="email" value="{{ $user->email }}" type="text" placeholder="Novo e-mail" required="">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="role_id">NÍVEL DE ACESSO</label>
                                    <select name="role_id" id="">
                                        <option selected="true" value="{{$user->roles()->first()->id}}" disabled>{{$user->roles()->first()->description}} (Atual)</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Gerente</option>
                                    </select>
                                    @if ($errors->has('role_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('role_id') }}</strong>
                                        </span>
                                    @endif
                                </div>       
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="text-center">
                                        <a href="{{ route('users') }}" class="btn btn-secondary rounded-5 text-light px-3 py-2 text-center fw-bolder" role="button"><i class="fa fa-arrow-left text-light me-2"></i>Voltar ao Início</a>
                                        &nbsp;
                                        <button id="add-button" type="submit" class="btn rounded-5 text-light px-3 py-2 text-center fw-bolder">
                                            <i class="fa fa-plus me-1"></i> Salvar
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
<</section>
@endsection