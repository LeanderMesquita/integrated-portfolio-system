@extends('layouts.admin')

@section('header-admin')
    @include('layouts.header_admin')
@endsection

@section('title')
    <title>Novo Projeto</title>
@endsection

@section('content-admin')
    <!-- pagina inicial / Cadastro de usuários -->
<section id="content">
    <div id="panel-custom" class="container text-justify bg-white px-5 py-0 border rounded-1 shadow p-3 mb-5 bg-body rounded">
        <div id="list-panel-custom" class="row justify-content-around mb-4">
            <div id="list-panel-heading" class="text-center m-4">
                <span class="panel-title bg-light"><h3>Cadastro de Projetos</h3></span>
            </div>
            <div class="list-panel-body">
                <div class="table-responsive">
                <form id="form-admin" class="form-horizontal" method="POST" action="{{route('projects.store')}}" enctype="multipart/form-data" name="formName">
                        @csrf
                        <div class="p-3">
                            <div class="text-form-create">
                                <div class="mb-3">
                                    <label for="name">Nome do projeto</label>
                                    <input name="name" value="{{ old('name')}}" type="text" placeholder="Nome" required="">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="dtCreation">Data de criação do projeto</label>
                                    <input name="dtCreation" value="{{ old('dtCreation')}}" type="date">
                                </div>
                                <div class="mb-3"> 
                                    <label for="image">Imagem do projeto</label>
                                    <div>
                                        <label for="image" class="custom-file-upload rounded-2"><i class="fa-solid fa-file-import"></i> Adicionar</label>
                                        <input name="image[]" id="image" value="{{ old('image')}}" multiple="multiple" onchange="displayFileName('image')" type="file">
                                        <span id="fileLabel"></span>
                                        <span id="fileName"></span>
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description">Descrição do projeto</label>
                                    <textarea name="description" wrap="hard" cols="20" rows="5" value="{{ old('description')}}" type="text" placeholder="Descrição do projeto" required="required"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="avaliable">O projeto está ativo/disponível?</label>
                                    <div class="form-check">
                                        <input class="form-check-input me-2 p-1" type="radio" value="1" name="avaliable" id="avaliable" checked>
                                        <label class="form-check-label" for="avaliable">
                                            Sim, ativo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input me-2 p-1" type="radio" value="0" name="avaliable" id="avaliable">
                                        <label class="form-check-label" for="avaliable">
                                            Não, inativo
                                        </label>
                                    </div>
                                    @if ($errors->has('avaliable'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avaliable') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="technology_id">Tecnologias Utilizadas</label>
                                    <select name="technology_id[]" id="technology_id" multiple="multiple" multiselect-search="true" multiselect-select-all="true" multiselect-max-items="5" >
                                        @foreach($technologies as $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('technology_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('technology_id') }}</strong>
                                    </span>
                                    @endif
                                </div> 
                                <div class="mb-3">
                                    <label for="responsible_agency">Orgãos responsáveis</label>
                                    <select name="responsible_agency[]" id="responsible_agency" multiple="multiple" multiselect-search="true" multiselect-select-all="true" multiselect-max-items="5">
                                        @foreach(config('constants.public.agencies') as $key => $value)
                                            <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="current_link">Link do projeto</label>
                                    <input type="url" name="current_link" id="current_link">
                                </div>      
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="text-center">
                                        <a href="{{ route('projects') }}" class="btn btn-secondary rounded-5 text-light px-3 py-2 text-center fw-bolder" role="button"><i class="fa fa-arrow-left text-light me-2"></i>Voltar ao Início</a>
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
</section>
@endsection