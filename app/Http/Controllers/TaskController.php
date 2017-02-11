<?php

    namespace App\Http\Controllers;

    use App\Task;
    use Auth;
    use Illuminate\Http\Request;

    class TaskController extends Controller
    {
    
        public function show($task)
        {
            return view('task')->withTask(Task::find($task));
        }

        public function addUser(Request $request, $task)
        {
            $task = Task::find($task);
            $task->users()->attach(Auth::user(), ['comment' => $request->comment]);

            return redirect('/');
        }

        
    }
