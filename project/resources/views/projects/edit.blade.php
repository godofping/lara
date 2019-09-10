@extends('layouts.layout')

@section('title', 'Home page')

@section('content')
    <h1>this is the edit page</h1>

    <form action="/projects/{{$project->id}}" method="POST">
        @method('PATCH')
        @csrf
    
        <input type="text" name="title" placeholder="Title here" value="{{ $project -> title }}">
        <br>
        <textarea name="description" placeholder="Description here">{{ $project -> description }}</textarea>
        <br>
        <input type="submit" value="save">

    </form>
    <br>

    <form action="/projects/{{$project->id}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="delete">
    </form>

      
    

@endsection('content')
