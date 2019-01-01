@extends('layout')

@section('title', 'Create New Project')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Create New Project
        </div>

        <div>
            <form method="POST" action="/projects">

                {{csrf_field() }}
                <div>
                    <input type="text" name="title" placeholder="Project title">
                </div>    
                <div>
                    <textarea name="description" placeholder="Project desctiption"></textarea>
                </div>
                <div>
                    <button style="width:200px; height:25px" type="submit" >Create Project</button>
                </div>
            </form>
        </div> 
    </div>
@endsection