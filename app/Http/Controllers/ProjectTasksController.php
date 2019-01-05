<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{

    public function store(Project $project)
    	{
    	
    	$attributes = request()->validate([
            'description' => ['required', 'min:3', 'max:255']
        ]);

    	$project->addTask($attributes);

    	return back();
    }

    public function update(Task $task)
    {

        $task->complete(request()->has('completed'));

        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();

        return back();
    }
}
