<?php

    namespace App\Http\Controllers;

    use App\Task;

    class TaskController extends Controller
    {
    
        public function show($task)
        {
            return view('task')->withTask(Task::find($task));
        }
    }
