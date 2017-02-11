<?php

    namespace App\Http\Controllers;

    use App\Task;
    use App\Organisation;
    use Auth;
    use Illuminate\Http\Request;

    class OrganisationController extends Controller
    {
        public function index()
        {
            return view('organisations')->withOrganisations(Auth::user()->organisations);
        }

        public function create()
        {
            return view('neworganisation');
        }

        public function store(Request $request)
        {
            $organisation = new Organisation;
            $organisation->fill($request->all());
            $organisation->owner_id = Auth::user()->id;
            $organisation->save();

            return redirect('/organisations');
        }

        public function newTask ($organisation) {
            $organisation = Organisation::find($organisation);
            return view('newTask')->withOrganisation($organisation);
        }

        public function viewTask ($organisation, $task) {
            $task = Task::find($task);
            return view('organisationTask')->withTask($task)->withUsers($task->users);
        }

        public function postTask(Request $request, $organisation)
        {


            $organisation = Organisation::find($organisation);

            if($organisation->owner_id === Auth::user()->id) {
                $task = new Task;
                $task->fill($request->all());
                $task->organisation_id = $organisation->id;
                $task->save();
            }
            return redirect('/');
        }
    }
