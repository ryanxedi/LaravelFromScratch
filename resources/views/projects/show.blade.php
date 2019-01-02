@extends('layout')

@section('title', 'Project')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ $project->title }}
        </div>
        <div>
            {{ $project->description }}
        </div>
        <div>
            <form action="/projects/{{ $project->id }}/edit">
            <button style="width:200px; height:25px" type="submit" >Edit Project</button>
        </div>
    </div>

@endsection