@extends('layouts.admin')

@section('header-admin')
    @include('layouts.header_admin')
@endsection

@section('title')
    <title>Editar Tecnologia</title>
@endsection

@section('content-admin')
    <!-- pagina inicial / Cadastro de usuários -->
<section id="content">
    <div id="panel-custom" class="container text-justify bg-white px-5 py-0 border rounded-1 shadow mb-5 bg-body">
        <div id="list-panel-custom" class="row justify-content-around mb-4">
            <div id="list-panel-heading" class="text-center m-4">
                <span class="panel-title bg-light"><h3>Editar Tecnologia</h3></span>
            </div>
            <div class="list-panel-body">
                <div class="table-responsive">
                <form id="form-admin" class="form-horizontal" method="POST" action="{{route('technologies.update')}}" enctype="multipart/form-data">
                    
                        <input type="hidden" name="id" id="id" value="{{ $technology->id }}">

                        @csrf
                        <div class="p-3">
                            <div class="text-form-create">
                                <div class="mb-3">
                                    <label for="name">Novo nome</label>
                                    <input name="name" value="{{ $technology->name }}" type="text" placeholder="Nome" required="">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="icon">Icon atual</label>
                                    <br>
                                    <img src='{{url("storage/technologies/{$technology->icon}")}}' alt="{{$technology -> icon}}" class="rounded float-left img-project mb-2">
                                    <div>
                                        <label for="icon" class="custom-file-upload"><i class="fa-solid fa-file-import"></i> Alterar</label>
                                        <input name="icon" id="icon" value="{{ old('icon')}}" onchange="displayFileName('icon')" type="file" required="">
                                        <span id="fileName"></span>
                                        @if ($errors->has('icon'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('icon') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                    
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="text-center">
                                        <a href="{{ route('technologies') }}" class="btn btn-secondary rounded-5 text-light px-3 py-2 text-center fw-bolder" role="button"><i class="fa fa-arrow-left text-light me-2"></i>Voltar ao Início</a>
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