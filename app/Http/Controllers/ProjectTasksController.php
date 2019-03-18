<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
<<<<<<< HEAD
       	Task::create([
    		'project_id' => $project->id,
    		'description' => request('description')
    	]);
=======

    	return back();
    }

    public function update(Task $task)
    {
<<<<<<< HEAD
=======

>>>>>>> 09d3dab9a817f5206ce8c7652651304a0640e2d6
        $task->update([
            'completed' => request()->has('completed')
        ]);

    	return back();
    }
}
