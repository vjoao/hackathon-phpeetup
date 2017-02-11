@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>Acesse sua conta</h3>
        </div>

         <form role="form" method="POST" action="{{ route('auth.login') }}" class="form-horizontal" _lpchecked="1">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" name="email" id="email" class="form-control">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" name="password" id="password" class="form-control">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Login</button>
                    <a href="{{ url('/password/reset') }}" class="btn btn-link">Forgot your password?</a>
                </div>
            </div>
        </form>

        <hr/>
        <div class="row">
            <div class="col col-sm-6">
                <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social"><i class="fa fa-facebook"></i>Entrar com o Facebook</a>
            </div>
            <div class="col col-sm-6">
                <a href="{{ url('/auth/google') }}" class="btn btn-block btn-google btn-social"><i class="fa fa-google-plus"></i>Entre com sua conta Google</a>
            </div>
        </div>

        

    </div>
@stop