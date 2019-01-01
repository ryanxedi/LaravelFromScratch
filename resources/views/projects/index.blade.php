@extends('layout')

@section('title', 'Show All Projects')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Projects
        </div>

        <div>
            <ul>
                @foreach($projects as $project)

                    <li style="display:inline-block; padding:20px">
                        <a href="/projects/{{ $project->id }}/edit">
                        {{$project->title}}<br>
                        {{$project->description}}</a>
                    </li>
                    
                @endforeach
            </ul>
        </div> 

        <div>
        	<h2 style="text-align:center"><a href="/projects/create">Create new project</a></h2>
        </div>
    </div>
@endsection