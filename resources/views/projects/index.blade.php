@extends('layout')
@section('content')
<br>
<h1 class="title">
    Projects
</h1>

<form method="get" action="/projects/create">
    <button type="submit" class="button">Create A Project</button>
</form>
<br>
<ul>
    @foreach ($projects as $project)
    <div class="list is-hoverable">
        <a class="list-item" href="/projects/{{$project->id}}">
            <!--<li> <button type="submit" class="button">{{$project->title}}</button></li><br>-->
            {{$project->title}}
        </a>
    </div>
    @endforeach
</ul>

@endsection