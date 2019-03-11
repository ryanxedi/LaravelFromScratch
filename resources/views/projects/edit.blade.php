@extends('layout')

@section('content')

	<h1 style="margin:0 0 40px 0">Edit Project</h1>

	<form method="POST" action="/projects/{{ $project->id }}">
		@csrf
		{{ method_field('PATCH') }}
		<div class="form-group">
			<input class="form-control" type="text" name="title" placeholder="Title" value="{{ $project->title }}">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="description" placeholder="Description">{{ $project->description }}</textarea>
		</div>
		<button class="btn btn-primary" style="margin:10px 0 0 0" type="submit">Update Project</button>
	</form>

	<form method="POST" action="/projects/{{ $project->id }}">
		@csrf
		{{ method_field('DELETE') }}
		<button class="btn btn-danger" style="margin:10px 0 0 0" type="submit">Delete Project</button>
	</form>

@endsection