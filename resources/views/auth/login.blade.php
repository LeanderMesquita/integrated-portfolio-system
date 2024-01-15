@extends('layouts.login')

@section('content')

<!-- -------------- Login Form -------------- -->
<div class="allcp-form theme-primary mw320" id="login">

    <div class="text-center mb20">
        <img width="100%" src="{{ asset('assets/img/logos/Logo_PMF_Hor_Col_Branco.svg') }}" alt="IPLANFOR - DISIN" />
    </div>

    <div style="padding:0 15px 0 15px; margin-top: 40px; margin-bottom: 40px;;" class="text-center mw320">
        <div class="text-center mb20">
            <img width="80%" src="{{ asset('assets/img/logos/Logo_IPLA_Simp_Col_Branco.svg') }}" alt="IPLANFOR - DISIN" />
        </div>
    </div>

    <div class="panel mw320">
        <form method="post" action="{{ route('login') }}" id="form-login">
            @csrf

            <div class="panel-body pn mv10">

                <div class="section{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="username" class="field prepend-icon">
                        <input type="text" name="email" id="email" class="gui-input" placeholder="@lang('Usuário ou E-mail')" value="{{ old('email') }}" required autofocus />
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        @if ($errors->has('nick_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nick_name') }}</strong>
                        </span>
                        @endif
                        <label for="username" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>
                <!-- -------------- /section -------------- -->

                <div class="section">
                    <label for="password" class="field prepend-icon">
                        <input type="password" name="password" id="password" class="gui-input" placeholder="@lang('Senha')" value="{{ old('password') }}" required autocomplete="off" />
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <label for="password" class="field-icon">
                            <i class="fa fa-lock"></i>
                        </label>
                    </label>
                </div>
                <!-- -------------- /section -------------- -->

                <center class="section">
                    <a class="btn-link-gray" href="{{ url('/password/reset') }}">
                        @lang('Esqueceu sua senha?')
                    </a>
                </center>


                <div class="section">
                    <div class="bs-component pull-left pt5">
                        <div class="radio-custom radio-primary mb5 lh25">
                            <input type="radio" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="remember" for="remember">@lang('Lembre me')</label>
                        </div>
                    </div>
                    <button type="submit" id="valida" class="btn btn-bordered btn-primary pull-right">
                        @lang('Entrar')
                    </button>
                </div>
                <!-- -------------- /section -------------- -->

            </div>
            <!-- -------------- /Form -------------- -->
        </form>
        
    </div>
    <!-- -------------- /Panel -------------- -->
</div>
<!-- -------------- /Spec Form -------------- -->

@endsection
