@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="jumbotron">
            <div class="row">
                <div class="col col-sm-2">
                    <img src="{{$task->organisation->avatar}}" style="width: 128px; height: 128px;">
                </div>
                <div class="col col-sm-10">
                    <h3>{{$task->organisation->name}}</h3>
                    <h4>{{$task->organisation->address}} - {{$task->organisation->city}}</h4>
                    <h4>Contato: {{$task->organisation->contact_person}} - {{$task->organisation->phone}}</h4>
                    <h4><a href="{{$task->organisation->website}}">{{$task->organisation->website}}</a></h4>
                </div>
            </div>
        </div>
        
        <div class="page-header">
            <h3>{{$task->name}}</h3>
            <h5>{{$task->description}}</h5>
        </div>


         <form role="form" method="POST" action="/tasks/{{$task->id}}/users" class="form-horizontal" _lpchecked="1">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                <label for="message" class="col-sm-2 control-label">Como pode ajudar?</label>
                <div class="col-sm-8">
                    <textarea name="message" id="message" rows="7" class="form-control"></textarea>
                    @if ($errors->has('message'))
                        <span class="help-block">{{ $errors->first('message') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope"></i> Ajudar!</button>
                </div>
            </div>
        </form>
    </div>
@stop