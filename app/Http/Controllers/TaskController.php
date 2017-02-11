<?php

    namespace App\Http\Controllers;

    use App\Task;

    class TaskController extends Controller
    {
    
        public function show($task)
        {
            return view('task')->withTask(Task::find($task));
        }

        public function addUser($task)
        {
            $task = Task::find($task);
            $task->users()->attach(Auth::user());

            return redirect('/');
        }

        
    }
