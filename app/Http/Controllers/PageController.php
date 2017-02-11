<?php

    namespace App\Http\Controllers;

    use App\Task;

    class PageController extends Controller
    {
        
        /**
         * Return the homepage view
         * @return mixed
         */   
        public function home()
        {
            $tasks = Task::all();
            return view('welcome')->withTasks($tasks);
        } 

        /**
         * Return the api dashboard view listing available apis
         * @return mixed
         */ 
        public function api()
        {
            return view('apidashboard');

        }    

        /**
         * Return the contact page view
         * @return mixed
         */ 
        public function contact()
        {
            return view('contact');

        }
    }
