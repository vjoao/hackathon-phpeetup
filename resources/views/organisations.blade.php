@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>ONGS que eu gerencio</h3>
            <a href="/organisations/new"> Cadastrar uma nova </a>
        </div>

        <div class="row">
            <div class="col-sm-12">
               @if($organisations->count())
                <table class="table">
                <th>
                    Organização
                </th>
                <th class="pull-right"></th>
                    @foreach($organisations as $organisation)
                    <tr>
                        <td>
                            {{$organisation->name}}
                            <ul class="list-group">
                                @foreach($organisation->tasks as $task)
                                   <li class="list-group-item">
                                    <a href="/organisations/{{$organisation->id}}/tasks/{{$task->id}}">{{ $task->name }} </a>
                                    </li> 
                                @endforeach
                                
                            </ul>
                        </td>
                        <td>
                            <a href="/organisations/{{$organisation->id}}/tasks/new" class="btn btn-primary pull-right">
                                Cadastrar tarefa
                            </a>
                        </td>
                    </tr>
                </table>
                @endforeach
               @else
                Você não possui ONGs cadastradas.
               @endif
            </div>
        </div>
    </div>
@stop