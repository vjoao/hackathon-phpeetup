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

        <table class="table">
            <tr>
                <th>
                    Voluntário
                </th>
                <th>
                    Email
                </th>
                <th>
                    Comentário
                </th>
            </tr>
            
            @foreach($users as $user)
                <tr>
                    <td>
                        <img src="{{$user->avatar}}" alt="" class="avatar">
                        {{$user->fullname}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        {{$user->pivot->comment}}
                    </td>
                </tr>
            @endforeach

        </table>

    </div>
@stop