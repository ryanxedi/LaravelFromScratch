@extends('layout')

@section('content')

	<h1 style="margin:0 0 10px 0">{{$project->title}}</h1>

	<div class="form-group">
		{{$project->description}}
	</div>

	@if ($project->tasks->count())
		<div class="form-control" style="margin:20px 0; padding:15px 15px">
			@foreach ($project->tasks as $task)
			<div>
				<form method="POST" action="/tasks/{{ $task->id }}">
					@method('PATCH')
					@csrf
					<label for="completed" class="{{ $task->completed ? 'completed-task' : ''}}"> </label>
					<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
					{{ $task->description }}
				</form>
			</div>
			@endforeach
		</div>
	@endif

	<div>
		<form method="POST" action="/projects/{{ $project->id }}/tasks">
			@csrf
			<input class="form-control" type="text" class="input" name="description" placeholder="New task">
			<button class="btn btn-primary" style="margin:10px 0 0 0" type="submit">Add Task</button>
		</form>
	</div>
	<hr>
	<form method="POST" action="/projects/{{ $project->id }}">
		@csrf
		{{ method_field('DELETE') }}
		<button class="btn btn-danger" style="; float:right" type="submit">Delete Project</button>
	</form>
	<form action="/projects/{{ $project->id }}/edit/">
		@csrf
		<button class="btn btn-primary" style="margin:0 10px 0 0; float:right" type="submit">Edit Project</button>
	</form>
@endsection