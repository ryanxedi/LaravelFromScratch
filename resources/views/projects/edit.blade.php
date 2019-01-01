@extends('layout')

@section('title', 'Edit Project')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Edit Project
        </div>

        <div>
            <form method="POST" action="/projects/{{ $project->id }}">

                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div>
                    <label for="title">Project Title</label>
                </div>    
                <div>
                    <input type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
                </div>
                <div>
                    <textarea name="description" placeholder="Project desctiption" >{{ $project->description }}</textarea>
                </div>
                <div>
                    <button style="width:200px; height:25px" type="submit" >Update Project</button><br>
                </div>
            </form>
            <form method="POST" action="/projects/{{ $project->id }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button style="width:200px; height:25px" type="submit" >Delete Project</button>
            </form>

        </div> 
    </div>
@endsection