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
                    <input style=" {{ $errors->has('title') ? 'border:1px solid red' : '' }}" type="text" name="title" placeholder="Project title" value=" {{old('title')}}">
                </div>    
                <div>
                    <textarea style=" {{ $errors->has('description') ? 'border:1px solid red' : '' }}"name="description" placeholder="Project desctiption"> {{old('description')}}
                    </textarea>
                </div>
                <div>
                    <button style="width:200px; height:25px" type="submit" >Create Project</button>
                </div>
            </form>
        </div> 

        @include ('errors')
        
    </div>
@endsection