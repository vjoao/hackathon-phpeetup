@extends('layouts.master')

@section('content')
    <div class="main-container">
         <h1>PossoAjudar</h1>
         <p class="lead">A sua forma de encontrar trabalho voluntário e ajudar as organizações da sua cidade.</p>
         <hr>

         <div class="row">
            <div class="col-sm-12">
            <table class="table">
               <th>
                Tarefa
               </th>
               <th>
                Descrição
               </th>
               <th>
                Organização
               </th>
               <th style="width: 64px;">
               </th>
               @foreach($tasks as $task)
                <tr>
                    <td>{{$task->name}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->organisation->name}}</td>
                    <td>
                    <a href="/tasks/{{$task->id}}" class="btn btn-primary">Posso Ajudar!</a>
                    </td>
                </tr>
               @endforeach
            </table>
            </div>
        </div>
    </div>
@stop