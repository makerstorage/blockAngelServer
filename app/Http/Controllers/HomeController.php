<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;
use Project;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = \Auth::user();
        $sampleProjects = \App\Project::where('user_id', 0)->get();

        return view('home',compact('user','sampleProjects'));
    }

    public function openProject($id)
    {
        $user = \Auth::user();
        
       // $project = \App\Project::where('id', $id)->where('user_id', $user->id)->first();
        $project = $user->projects()->where('id', $id)->first();

        if ($project === null) { abort(404);}

        $code = $project->code;
        $name = $project->name;

        return view('blockAngel.tryit',(compact('code','name','user')));
    }

        public function openSampleProject($id)
    {
        
        $user = \Auth::user(); 
        $project = \App\Project::where('id', $id)->first();
        

        if ($project === null) { abort(404);}

        $code = $project->code;
        $name = $project->name;

        return view('blockAngel.tryit',(compact('code','name','user')));
    }


    public function saveProject(Request $request)
    {
        
        $user = \Auth::user();

        $projectName = $_GET['projectName'];
        $code = urldecode($_GET['code']);

        // try to find if there is a project with same name

        $project = \App\Project::where('name', $projectName)->where('user_id', $user->id)->first();

        if ($project === null) {
            // project doesn't exist create new one
            $project = new \App\Project;

            $project->name = $projectName;
            $project->code = $code;
            $project->user_id = $user->id;

            $project->save();

        } else {
            // we have a project with that name, so update the code
            $project->code = $code;
            $project->save();

        }

        return response()->json(['projectId' => $project->id]);
    }


    public function tryit() // this opens blank project with name New Project
    {
        $user = \Auth::user();

        $code = '';
        $name = 'New Project';
        
        return view('blockAngel.tryit',(compact('code','name','user')));
    }




}
