@extends('layout')

@section('title', 'Project')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ $project->title }}
        </div>
        <div style="font-size:1.2em">
            {{ $project->description }}
        </div>

        <div>
            <form action="/projects/{{ $project->id }}/edit">
            <button style="width:200px; height:25px" type="submit" >Edit Project</button>
        </form>
        </div>

        @if ($project->tasks->count())
            <div style="padding-top:20px">
                <h2>Tasks</h2>

                @foreach ($project->tasks as $task)
                    <div style="text-align:center">
                        <form method="POST" action="/tasks/{{ $task->id }}">
                            @csrf
                            @method('PATCH')

                            <label class="checkbox {{ $task->completed ? 'is-complete' : ''}}" for="completed">
                                <input 
                                    style="width:10px" 
                                    type="checkbox" 
                                    name="completed" 
                                    onChange="this.form.submit()" 
                                    {{ $task->completed ? 'checked' : ''}}
                                >
                                {{ $task->description }}
                            </label>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif


    </div>

@endsection