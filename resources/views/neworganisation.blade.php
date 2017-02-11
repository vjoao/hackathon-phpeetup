@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>Cadastrar organizaçao</h3>
        </div>

         <form role="form" method="POST" action="{{ route('postOrganisation') }}" class="form-horizontal" _lpchecked="1">
            {!! csrf_field() !!}
            
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" autofocus="" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="address" class="col-sm-2 control-label">Endereço</label>
                <div class="col-sm-8">
                    <input type="text" name="address" id="address" autofocus="" class="form-control">
                    @if ($errors->has('address'))
                        <span class="help-block">{{ $errors->first('address') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('contact_person') ? ' has-error' : '' }}">
                <label for="contact_person" class="col-sm-2 control-label">Pessoa de contato</label>
                <div class="col-sm-8">
                    <input type="text" name="contact_person" id="contact_person" autofocus="" class="form-control">
                    @if ($errors->has('contact_person'))
                        <span class="help-block">{{ $errors->first('contact_person') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-8">
                    <input type="text" name="phone" id="phone" autofocus="" class="form-control">
                    @if ($errors->has('phone'))
                        <span class="help-block">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                <label for="city" class="col-sm-2 control-label">Cidade</label>
                <div class="col-sm-8">
                    <input type="text" name="city" id="city" autofocus="" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('city') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                <label for="website" class="col-sm-2 control-label">Website (url)</label>
                <div class="col-sm-8">
                    <input type="text" name="website" id="website" autofocus="" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('website') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                <label for="avatar" class="col-sm-2 control-label">Foto de perfil (url)</label>
                <div class="col-sm-8">
                    <input type="text" name="avatar" id="avatar" autofocus="" class="form-control">
                    @if ($errors->has('avatar'))
                        <span class="help-block">{{ $errors->first('avatar') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope"></i> Cadastrar nossa ONG</button>
                </div>
            </div>
        </form>
    </div>
@stop