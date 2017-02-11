@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>Cadastrar tarefa</h3>
        </div>

        <div class="jumbotron">
            <div class="row">
                <div class="col col-sm-2">
                    <img src="{{$organisation->avatar}}" style="width: 128px; height: 128px;">
                </div>
                <div class="col col-sm-10">
                    <h3>{{$organisation->name}}</h3>
                    <h4>{{$organisation->address}} - {{$organisation->city}}</h4>
                    <h4>Contato: {{$organisation->contact_person}} - {{$organisation->phone}}</h4>
                    <h4><a href="{{$organisation->website}}">{{$organisation->website}}</a></h4>
                </div>
            </div>
        </div>

         <form role="form" method="POST" action="{{ route('postTask', $organisation->id) }}" class="form-horizontal" _lpchecked="1">
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

            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-8">
                    <input type="text" name="description" id="description" autofocus="" class="form-control">
                    @if ($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope"></i> Cadastrar tarefa</button>
                </div>
            </div>
        </form>
    </div>
@stop