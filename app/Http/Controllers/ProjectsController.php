<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ProjectCreated;
use App\Project;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get(); 

        //dump($projects);

    	return view('projects.index', compact ('projects'));
    }


    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:3', 'max:255']
        ]);

        $attributes['owner_id'] = auth()->id();

        $project = Project::create($attributes);

        \Mail::to('ryan@xedi.com')->send(
            new ProjectCreated($project)
        );

        return redirect('/projects');
    }


    public function create()
    {
    	return view('projects.create');
    }


    public function show(Project $project)
    {
        // Use this to only allow authorized access to this particular endpoint
        $this->authorize('update', $project);

        return view('projects.show', compact('project'));
    }


    public function update(Project $project)
    {

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }


    public function destroy(Project $project)
    {

        $project->delete();

        return redirect('/projects');
    }


    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
}
