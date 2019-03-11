@extends('layout')

@section('content')

	<h1 style="margin:0 0 40px 0">All Projects</h1>
	<ul>
		@foreach ($projects as $project)
		<li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
		@endforeach
	</ul>
	<form action="/projects/create">
		<button class="btn btn-primary" style="margin:10px 0 0 0" type="submit">Create New Project</button>
	</form>
@endsection
