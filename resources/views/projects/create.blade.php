@extends('layout')
@section('content')
<br>
<h1 class="title">
    Add Project</h1>

<form method="POST" action="/projects">
    @csrf
    <div>
        <input type="text" name="title" class="input {{$errors->has('title') ? 'is-danger' : ''}}"
            placeholder="Project Title" value="{{old('title')}}" required>
    </div>
    <br>
    <div>
        <input name="description" class="input {{$errors->has('description') ? 'is-danger' : ''}}"
            placeholder="Project description" value="{{old('description')}}" required>

        <div> <br>

            <button type=" submit" class="button is-success">Create Project</button>
        </div>
        @include('errors')

</form>

@endsection