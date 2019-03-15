<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
    	dd($project->id());
       	Task::create([
    		'project_id' => $project->id,
    		'description' => request('description')
    	]);

    	return back();
    }

    public function update(Task $task)
    {

        $method = request()->has('completed') ? 'complete' : 'incomplete';

    	$task->method();

    	return back();
    }
}
