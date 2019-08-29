@extends('layout')

@section('title')
Home
@endsection

@section('header')
Home
@endsection

@section('content')    

<ul>

@foreach ($tasks as $task) 
    <li>{{ $task }}</li>
@endforeach
</ul>

@endsection