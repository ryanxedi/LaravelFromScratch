@extends('layout')

@section('title', 'About Us')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Projects
        </div>

        <div>
            <ul>
                @foreach($projects as $project)

                    <li style="display:inline-block; padding:0 20px">
                        {{$project->title}}<br>
                        {{$project->description}}
                    </li>
                    
                @endforeach
            </ul>
        </div>
    </div>
@endsection