@extends('layouts.login')

@section('content')
<div class="allcp-form theme-primary mw320">

    <div class="text-center mb20">
        <img width="100%" src="{{ asset('assets/img/logos/Logo_PMF_Hor_Col_Branco.svg') }}" alt="IPLANFOR - DISIN" />
    </div>

    <div class="text-center mw320">
        <div class="text-center mb20">
            <img width="80%" src="{{ asset('assets/img/logos/Logo_IPLA_Simp_Col_Branco.svg') }}" alt="IPLANFOR - DISIN" />
        </div>
    </div>

 
    <div class="panel mw420">
        <span>Alterar Senha</span>
        <form class="form-horizontal" method="POST" action="{{ route('update.password') }}">
            
            <input type="hidden" name="id" id="id" value="{{ $user->id }}">

            {{ csrf_field() }}

            <div class="panel-body pn">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="section{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="username" class="field prepend-icon">
                    <input type="password" name="password" id="password" class="gui-input" placeholder="Insira a nova senha" required autofocus required autocomplete="new-password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="username" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
                
                <label for="username" class="field prepend-icon">
                    <input id="password-confirm" type="password" class="gui-input" placeholder="Confirme sua senha" name="password_confirmation" required autocomplete="new-password">
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
                    {{ __('Confirmar') }}
                </button>
            </div>
        </form>
    </div>
         
</div>
@endsection
