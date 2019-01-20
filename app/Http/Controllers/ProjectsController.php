<?php

namespace App\Http\Controllers;

use App\Project;
use App\Events\ProjectCreated;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('projects.index', ['projects' => auth()->user()->projects]);
    }


    public function create()
    {
    	return view('projects.create');
    }

    public function store()
    {
        $attributes = $this->validateProject();

        $attributes['owner_id'] = auth()->id();

        $project = Project::create($attributes);

        session()->flash('message', 'Your project has been crated.');

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        // Use this to only allow authorized access to this particular endpoint
        $this->authorize('update', $project);

        return view('projects.show', compact('project'));
    }


    public function update(Project $project)
    {
        $project->update($this->validateProject());

        return redirect('/projects');
    }


    public function destroy(Project $project)
    {

        $project->delete();

        return redirect('/projects');
    }

    protected function validateProject()

    {
        return request()->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:3', 'max:255']
        ]);
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
}
