@extends('layout')

@section('content')
<br>
<h1 class="title">{{$project->title}}</h1>


<div class="content">
    <h4>Description:</h4>
    {{$project->description}}
    <br><br>
    <div class="field has-addons">
        <form action="/projects">
            <button class="button" type="submit">Back</button>
        </form>
        <form action="/projects/{{$project->id}}/edit">
            <button class="button is-link" type="submit">Edit Project</button>
        </form>
        <form method="POST" action="/projects/{{$project->id}}">
            @method('DELETE')
            @csrf
            <button class="button is-danger" type="submit">Delete Project</button>
        </form>
    </div>
</div>
<br>
<h2>Tasks:</h2>

@if ($project->tasks->count())
<div class="box">

    @foreach ($project->tasks as $task)
    <div class="field has-addons">

        <form method="POST" action="/tasks/{{$task->id}}">
            @method('PATCH')
            @csrf
            <label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">
                <input type="checkbox" name="completed" id="" autocomplete="off" onchange="this.form.submit()"
                    {{$task->completed ? 'checked' : ''}}>
                {{$task->body}}
            </label>

        </form>
        <form method="POST" action="/tasks/{{$task->id}}">
            @method('DELETE')
            @csrf
            <button class="button is-danger is-small" type="submit">X</button>
        </form>
    </div>
    @endforeach

</div>
@endif


<form action="/projects/{{$project->id}}/tasks" method="POST" class="box">
    @csrf
    <div class="field">
        <label class="label" for="description">New Task</label>
        <div class="control">
            <input type="text" class="input" name="description" placeholder="" required>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Add Task</button>
        </div>
    </div>

</form>


@endsection