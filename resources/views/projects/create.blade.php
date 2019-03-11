@extends('layout')

@section('content')

	<h1 style="margin:0 0 40px 0">Create a New Project</h1>
	<form method="POST" action="/projects">
		@csrf
		<div class="form-group">
			<input class="form-control" type="text" name="title" placeholder="Title">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="description" placeholder="Description"></textarea>
		</div>
		<button class="btn btn-primary" type="submit">Create New Project</button> <a style="font-size:0.8em; color:#666; vertical-align: bottom" href="/">Cancel</a>
	</form>
@endsection