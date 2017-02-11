@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>{{$task->name}}</h3>
            <h5>{{$task->description}}</h5>
        </div>

         <form role="form" method="POST" action="{{ route('save_task') }}" class="form-horizontal" _lpchecked="1">
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