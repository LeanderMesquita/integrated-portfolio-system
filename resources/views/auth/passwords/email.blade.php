@extends('layouts.login')

@section('content')
<div class="allcp-form theme-primary mw400">

    <div class="text-center mt20 mb40">
        <img width="100%" src="{{ asset('assets/img/logos/Logo_CONJUNTA_Full_Hor_Col_Branco.svg') }}" alt="Fortaleza em Mapas" />
    </div>
 
    <div class="panel mw420">
        <span>Resetar Senha</span>
        <form class="form-horizontal" method="POST" action="{{ url('password/email') }}">
            <input type="hidden" name="csrf_token" value="{{ csrf_token() }}" />
            {{ csrf_field() }}

            <div class="panel-body pn">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="section{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="username" class="field prepend-icon">
                    <input type="email" name="email" id="email" class="gui-input" placeholder="E-mail de usuário" value="{{ old('email') }}" required autofocus />
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <label for="username" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
            </div>
            <div class="section">
                <button route="{{ route('login') }}" class="btn-app-back btn btn-bordered btn-default pull-left">
                    @lang('Voltar')
                </button>

                <button type="submit" class="btn btn-bordered btn-primary pull-right">
                    {{ __('Recuperar Senha') }}
                </button>
            </div>
        </form>
    </div>
         
</div>
@endsection
