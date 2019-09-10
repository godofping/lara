@extends('layouts.layout')

@section('title', 'Projects')
    

@section('content')
    <h1>hello world</h1>

    <a href="/projects/create"><button>add</button></a>

    <ul>

    @foreach ($projects as $project)
        <li> {{ $project->id }} <a href="/projects/{{ $project->id }}">{{ $project->title }}</a> <a href="/projects/{{ $project->id }}/edit"><button>manage</button></a></li>
    @endforeach

    </ul>
@endsection