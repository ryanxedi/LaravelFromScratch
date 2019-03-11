@extends('layout')

@section('content')

	<h1 style="margin:0 0 40px 0">{{$project->title}}</h1>

	<div class="form-group">
		{{$project->title}}
	</div>
	<div class="form-group">
		{{$project->description}}
	</div>

	<form action="/projects/{{ $project->id }}/edit/">
		@csrf
		<button class="btn btn-primary" style="margin:10px 0 0 0" type="submit">Edit Project</button>
	</form>

	<form method="POST" action="/projects/{{ $project->id }}">
		@csrf
		{{ method_field('DELETE') }}
		<button class="btn btn-danger" style="margin:10px 0 0 0" type="submit">Delete Project</button>
	</form>
@endsection