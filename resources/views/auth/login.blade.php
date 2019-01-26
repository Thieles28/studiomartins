@extends('layouts.app')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">Studio Martins!</h1>
                        <p class="text-lead text-light">Sua beleza em primeiro lugar.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Área de Autenticação</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="{{ asset('img/icons/common/google.svg') }}"></span>
                                <span class="btn-inner--text">Google</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Entre com suas credencias</small>
                        </div>
                        {!! Form::model(['route' => 'login', 'role' => 'form', 'method' => 'post']) !!}
                            @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                {!! Form::text('email', old('email'), ['class' => 'form-control', $errors->has('email') ? 'is-invalid' : '', 'placeholder' => "Email"]) !!}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                {!! Form::password('password', ['class' => 'form-control', $errors->has('password'), 'placeholder' => 'Senha']) !!}
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            {!! Form::checkbox('remember', old('remember'), null,  ['class' => 'custom-control-input', 'id' => 'remember']) !!}
                            {!! Form::label('remember', __('Remember Me'), ['class' => 'custom-control-label text-muted', 'for' => 'remember']) !!}
                        </div>
                        <div class="text-center">
                            {!! Form::submit('Entrar', ['class' => 'btn btn-primary my-4']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-light"><small>{{ __('Esqueceu a senha?') }}</small></a>
                        @endif
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('register') }}" class="text-light"><small>Criar nova conta</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
