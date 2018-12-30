@extends('layout')

@section('title', 'Welcome')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Welcome to {{$title}}
        </div>
        
        <div>
            <ul>
                @foreach($tasks as $task)

                    <li style="display:inline-block; padding:0 20px">
                        {{$task}}
                    </li>
                    
                @endforeach
            </ul>
        </div>

    </div>
@endsection

